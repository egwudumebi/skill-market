<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Expert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RecruiterController extends Controller
{
    public function home(): View
    {
        $recruiter = Auth::user();
        $domains = Domain::all();
        return view('recruiter.home')
            ->with('domains', $domains)
            ->with('recruiter', $recruiter);
    }

    public function explore($domain_id):View
    {
        $recruiter = Auth::user();
        $experts = Expert::where('domain_id', $domain_id)->get();
        // dd($experts);
        $domain = Domain::findOrFail($domain_id);
        return view('recruiter.domain')
            ->with('experts', $experts)
            ->with('domain', $domain)
            ->with('recruiter', $recruiter);
    }

    public function profile(): View
    {
        $recruiter = Auth::user();
        return view('recruiter.profile')
            ->with('recruiter', $recruiter);
    }

    public function viewExpert($expert_id): View
    {
        $expert = Expert::find($expert_id);
        return view('recruiter.expert', ['expert' => $expert]);
    }

    public function form(): View
    {
        $recruiter = Auth::user();
        return view('recruiter.search')
            ->with('recruiter', $recruiter);
    }

    public function search(Request $request)
    {
        $recruiter = Auth::user();
        $query = $request->input('query');

        // Perform the search query on your model
        $results = Expert::where('fullname', 'LIKE', "%{$query}%") // Adjust the field name
            ->orWhere('phone', 'LIKE', "%{$query}%") // Example: if you want to search in another field
            ->get();

        // Pass the results to the view
        return view('recruiter.search', ['results' => $results, 'recruiter' => $recruiter]);
    }

}
