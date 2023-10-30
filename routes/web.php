<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\JobOffersController;
use App\Http\Controllers\applicants\JobsController;
use App\Http\Controllers\applicants\ApplyController;
use App\Http\Controllers\admin\ApplicationsController;
use App\Http\Controllers\applicants\ProfileController;
use App\Http\Controllers\applicants\UserAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/about', function () {
    return view('pages.about');
});

//users/applicants
Route::get('/users/signup', [UserAuthController::class, 'index'])->name('signup');
Route::post('/users/signup', [UserAuthController::class, 'store']);

Route::get('/users/signin', [UserAuthController::class, 'show'])->name('signin');
Route::post('/users/signin', [UserAuthController::class, 'login']);

// Jobs page
Route::get('/jobs', [ApplyController::class, 'index'])->name('apply');

// authenticated user pages
Route::get('users/jobs', [JobsController::class, 'index'])->name('jobs');
Route::get('users/jobs/detail', [JobsController::class, 'show'])->name('detail');
Route::get('users/jobs/applications', [JobsController::class, 'create'])->name('applications');
Route::get('users/profile', [ProfileController::class, 'index'])->name('profile');


// Admin pages
// >> authentication pages

Route::get('/admin/register', [AdminAuthController::class, 'index'])->name('register');
Route::post('/admin/register', [AdminAuthController::class, 'store']);

Route::get('/admin/login', [AdminAuthController::class, 'show'])->name('login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);

// >> other pages
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin/applicants', [DashboardController::class, 'show'])->name('applicants');
Route::get('/admin/applicant/detail', [DashboardController::class, 'detail'])->name('applicant');

Route::get('/admin/joboffers', [JobOffersController::class, 'index'])->name('offers');

Route::get('/admin/new-job', [JobOffersController::class, 'create'])->name('new-job');
Route::post('/admin/new-job', [JobOffersController::class, 'store']);

Route::get('/admin/job/{detail}', [JobOffersController::class, 'show'])->name('job-detail');

Route::get('/admin/update/{edit}', [JobOffersController::class, 'edit'])->name('edit');
Route::put('/admin/update/{edit}', [JobOffersController::class, 'update']);

Route::get('/admin/applications', [ApplicationsController::class, 'index'])->name('listing');
