<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterFormRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Domain;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use App\Models\Expert;
use App\Models\Recruiter;

class AuthController extends Controller
{

    // Show patient register page
    public function showRegister(): View 
    {
        return view('register');
    }

    // Show login page
    public function showLogin(): View 
    {
        return view('login');
    }

    // Authenticate a user's login request
    public function login(LoginRequest $request): RedirectResponse
    {
        // dd($request);
        try{
            // dd('A');
            if (Auth::guard('admins')->attempt(['username' => $request->username, 'password' => $request->password])) {
                $admin = Auth::guard('admins')->user();
                // dd('B');
                return redirect('/admin/home');
            }elseif (Auth::guard('experts')->attempt(['username' => $request->username, 'password' => $request->password])) {
                $expert = Auth::guard('experts')->user();
                if ($expert->status == 'active') {
                    // dd('C');
                    return redirect('/home');
                }
                
                // Auth::guard('experts')->logout();
                // return back()->with('error', "Account not yet approved!");
                
            } elseif (Auth::guard('recruiters')->attempt(['username' => $request->username, 'password' => $request->password])) {
                $user = Auth::guard('recruiters')->user();
                if ($user->status == 'active') {
                    return redirect()->intended('/recruiter/home');
                }
                Auth::guard('recruiters')->logout();
                return back()->with('error', "Account not yet approved!");
            } else {
                return back()->with('error', 'Invalid credentials');
            }
            
            
        }catch(ValidationException $e) {
            return back()->withErrors($e->validator->errors());
        }
        
    }

    // Create Patient
    public function createUser(RegisterRequest $request): RedirectResponse
    {
        $modelClass = ($request->user_tier == 'recruiter') ? Recruiter::class : Expert::class;
        // dd($modelClass);
        try{
            $user = $modelClass::create([
                'fullname' => $request->fullname,
                'email' => $request->email,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'user_tier' => $request->user_tier,
            ]);

            if ($user && $request->user_tier == 'recruiter') {
                Auth::guard('recruiters')->login($user);
            } else {
                Auth::guard('experts')->login($user);
            }
            return ($modelClass == Recruiter::class) ? redirect('/recruiter/home') : redirect('/home');

        } catch (ValidationException $e){
            return back()->withErrors($e->validator->errors());
        }

        // return redirect('/');
        
        
    }

    public function singleDomain($domain_id)
    {
        $domain = Domain::find($domain_id);
        // dd($domain);
        $sub_skills = $domain->sub_skills;
        if ($sub_skills) {
            return view('view-domain', [
                'domain' => $domain,
                'sub_skills' => $sub_skills,
            ]);
        }
    }

    // Logout a session == Delete session values
    public function logout(): RedirectResponse
    {
        $guards = ['recruiters', 'experts', 'admins'];
        foreach($guards as $guard) {
            Auth::guard($guard)->logout();
            session()->regenerate();
        }
        return redirect('/login');
    }
}
