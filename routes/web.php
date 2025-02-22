<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\SuperController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


Route::get('/', function () {return view('auth.login');});
Route::get('/services', function () {return view('services');});
Route::get('/about', function () {return view('about');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Routes for users with the 'manager' role
Route::middleware(['auth', RoleMiddleware::class . ':super'])->group(function () {

    Route::get('/super-dashboard', [SuperController::class, 'index'])->name('super-dashboard');
    Route::get('/user-profile', [SuperController::class, 'profile'])->name('profile');
});

Route::middleware(['auth', RoleMiddleware::class . ':admin'])->group(function () {

    Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('admin-dashboard');
    Route::get('/user-profile', [AdminController::class, 'profile'])->name('profile');
});

Route::middleware(['auth', RoleMiddleware::class . ':student'])->group(function () {

    Route::get('/student', [studentController::class, 'index'])->name('student-dashboard');
    Route::get('/user-profile', [studentController::class, 'profile'])->name('profile');
});
