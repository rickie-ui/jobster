<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\JobOffersController;
use App\Http\Controllers\applicants\JobsController;
use App\Http\Controllers\applicants\ApplyController;
use App\Http\Controllers\admin\ApplicationsController;
use App\Http\Controllers\applicants\ProfileController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/search', [IndexController::class, 'search'])->name('query');
Route::get('/jobs', [ApplyController::class, 'index'])->name('apply');
Route::get('/jobs/search', [ApplyController::class, 'search'])->name('search');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/about', function () {
    return view('pages.about');
});

// logout logic
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

//users/applicants
Route::get('/users/signup', [UserController::class, 'index'])->name('signup');
Route::post('/users/signup', [UserController::class, 'store']);

Route::get('/users/signin', [UserController::class, 'show'])->name('signin');
Route::post('/users/signin', [UserController::class, 'login']);

// authenticated user pages
Route::get('users/jobs', [JobsController::class, 'index'])->name('jobs');
Route::get('users/jobs/search', [JobsController::class, 'search'])->name('jobs-search');
Route::get('users/jobs/detail/{id}', [JobsController::class, 'show'])->name('detail');
Route::post('users/jobs/{id}/apply', [JobsController::class, 'store'])->name('store');
Route::get('users/applications', [JobsController::class, 'create'])->name('applications');

Route::get('users/profile/{id}', [ProfileController::class, 'index'])->name('profile');
Route::put('users/profile/{id}', [ProfileController::class, 'update']);


// Admin pages
// >> authentication pages

Route::get('/admin/register', [UserController::class, 'signup'])->name('register');
Route::post('/admin/register', [UserController::class, 'create']);

Route::get('/admin/login', [UserController::class, 'signin'])->name('login');
Route::post('/admin/login', [UserController::class, 'login']);

// >> other pages
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin/applicants', [DashboardController::class, 'show'])->name('applicants');
Route::get('/admin/applicant/detail/{id}', [DashboardController::class, 'detail'])->name('applicant');

Route::get('/admin/joboffers', [JobOffersController::class, 'index'])->name('offers');

Route::get('/admin/new-job', [JobOffersController::class, 'create'])->name('new-job');
Route::post('/admin/new-job', [JobOffersController::class, 'store']);

Route::get('/admin/job/{detail}', [JobOffersController::class, 'show'])->name('job-detail');

Route::get('/admin/update/{edit}', [JobOffersController::class, 'edit'])->name('edit');
Route::put('/admin/update/{edit}', [JobOffersController::class, 'update']);

Route::get('/admin/applications', [ApplicationsController::class, 'index'])->name('listing');
