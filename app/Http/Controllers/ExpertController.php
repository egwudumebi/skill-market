<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditRequest;
use App\Models\Domain;
use App\Models\Expert;
use App\Traits\ImageUpload;
use Dotenv\Exception\ValidationException;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ExpertController extends Controller
{

    public function Profile(): View
    {
        // dd("fhgcj");
        $domains = Domain::all();
        $expert = Auth::guard('experts')->user();
        
        return view('expert.profile')
            ->with('expert', $expert)
            ->with('domains', $domains);
    }

    // Update the Expert's record
    use ImageUpload;
    public function editProfile(EditRequest $request): RedirectResponse
    { 
        // dd($request->all());
        try{
            $file_path = $this->upload($request);
            // if (!$file_path) {
            //     return back()->with(['err_msg' => 'Image upload failed!']);
            // }

            // Update the user record with the new file path
            $request->user()->profile = $file_path;
            $expert = Expert::find($request->user()->id);
            // dd($expert);
            
            $expert->profile = $file_path ? $file_path : $expert->profile;
            $expert->fullname = $request->input('fullname') ? $request->input('fullname') : $expert->fullname;
            $expert->username = $request->input('username') ? $request->input('username') : $expert->username;
            $expert->bio = $request->input('bio') ? $request->input('bio') : $expert->bio;
            $expert->gender = $request->input('gender') ? $request->input('gender') : $expert->gender;
            $expert->domain_id = $request->input('domain_id') ? $request->input('domain_id') : $expert->domain_id;
            $expert->sub_skills = $request->input('sub_skills') ? $request->input('sub_skills') : $expert->sub_skills;
            $expert->company = $request->input('company') ? $request->input('company') : $expert->company;
            $expert->job_title = $request->input('job_title') ? $request->input('job_title') : $expert->job_title;
            $expert->country = $request->input('country') ? $request->input('country') : $expert->country;
            $expert->address = $request->input('address') ? $request->input('address') : $expert->address;
            $expert->phone = $request->input('phone') ? $request->input('phone') : $expert->phone;
            $expert->email = $request->input('email') ? $request->input('email') : $expert->email;
            $expert->twitter = $request->input('twitter') ? $request->input('twitter') : $expert->twitter;
            $expert->facebook = $request->input('facebook') ? $request->input('facebook') : $expert->facebook;
            $expert->instagram = $request->input('instagram') ? $request->input('instagram') : $expert->instagram;
            $expert->linkedin = $request->input('linkedin') ? $request->input('linkedin') : $expert->linkedin;
            $expert->whatsapp = $request->input('whatsapp') ? $request->input('whatsapp') : $expert->whatsapp;
            // Handle JSON field separately
            // $subSkills = $request->input('sub_skills');
            // if (is_array($subSkills)) {
            //     $expert->sub_skills = $subSkills;
            // }

            $expert->save();

            return Redirect::route('profile.edit')->with('status', 'profile updated successfully');
        }catch (Exception $e) {
            // Catch any exception and return with a generic error message
            return back()->with(['err_msg' => 'An error occurred: ' . $e->getMessage()]);
        }
    }

    public function getSubSkills($domain_id)
    {
        $domain = Domain::find($domain_id);
        // dd($domain);
        $sub_skills = $domain->sub_skills;
        if ($sub_skills) {
            return response()->json([
                'success' => true,
                'message' => 'Data fetched successfully.',
                'data' => $sub_skills,
            ], 200);
        }else {
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch skills.',
            ], 500);
        }
    }
}
