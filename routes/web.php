<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\RecruiterController;
use App\Http\Requests\ContactRequest;
use App\Models\Domain;
use App\Models\DomainPhoto;
use App\Models\Expert;
use App\Models\Message;
use App\Models\Recruiter;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $domains = Domain::with('photo')->get();
    // dd($domains);
    return view('index', ['domains'=> $domains]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/market', function () {
    $domains = Domain::all();
    return view('market', ['domains' => $domains]);
});

Route::get('/services', function () {
    return view('services');
});

Route::post('/contact', function (ContactRequest $request) {
    $message = Message::create([
        'fullname' => $request->fullname,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
    ]);
    if($message) {
        return redirect()->back()
            ->with(['message' => 'Message sent successfully']);
    }
})->name('contact.save');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'createUser'])->name('register.submit');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/login', [AuthController::class, 'login'])->name('login.authenticate');
Route::get('/domain/{domain_id}', [AuthController::class, 'singleDomain'])->name('domain.single');



Route::middleware(['auth:recruiters'])->group(function () {
    Route::get('/recruiter/home', [RecruiterController::class, 'home']);
    Route::get('/recruiter/profile', [RecruiterController::class, 'profile'])->name('recruiter.profile');
    Route::get('/view/{domain_id}', [RecruiterController::class, 'explore'])->name('domain.view');
    Route::get('/expert/{expert_id}', [RecruiterController::class, 'viewExpert']);
    Route::get('/search', [RecruiterController::class, 'form'])->name('search.form');
    Route::post('/search', [RecruiterController::class, 'search'])->name('search');
});


Route::middleware(['auth:experts'])->group(function () {
    
    Route::post('/expert/profile', [ExpertController::class, 'editProfile'])->name('profile.edit');
    Route::get('/subskill/{domain_id}', [ExpertController::class, 'getSubSkills'])->name('domain.subskills');
    Route::get('/home', [ExpertController::class, 'Profile'])->name('expert.home');
});

Route::middleware(['auth:admins'])->group(function () {
    
    Route::get('/admin/home', function() {
        $num_recruiters = Recruiter::count();
        $num_experts = Expert::count();
        return view('admin.home', [
            'num_recruiters' => $num_recruiters,
            'num_experts' => $num_experts,
        ]);
    });
    Route::get('/admin/experts', function () {
        $experts = Expert::all();
        return view('admin.experts', ['experts' => $experts]);
    });
    Route::get('/admin/recruiters', function () {
        $recruiters = Recruiter::all();
        return view('admin.recruiters', ['recruiters' => $recruiters]);
    });
});

// Route::middleware(['auth:web'])->group(function () {
//     Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
//     Route::get('/dashboard', [PatientController::class, 'index'])->name('dashboard.index');
//     Route::get('/dashboard/profile', [PatientController::class, 'showProfileEdit'])->name('edit');
//     Route::post('/dashboard/profile', [PatientController::class, 'edit']);
//     Route::get('/dashboard/searchDoctor', [PatientController::class, 'showSearchDoctor'])->name('showSearch');
//     Route::get('/dashboard/view-doctor/{id}', [PatientController::class, 'viewDoctor'])->name('view-doctor');
//     Route::post('/dashboard/view-doctor/review', [ReviewController::class, 'createReview']);
// });