<?php

use Illuminate\Support\Facades\Route;
use Modules\Controllers\Frontend\Auth\AuthController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'LoginPage'])->name('LoginPage');
Route::get('/register', [AuthController::class, 'RegisterPage'])->name('RegisterPage');
Route::get('/forgot-password', [AuthController::class, 'ForgotPassword'])->name('ForgotPassword');

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/



// Website Routes
Route::get('/', [HomeController::class, 'index'])->name("website");
Route::get('about-us', [HomeController::class, 'aboutUs'])->name("aboutUs");
Route::get('services', [HomeController::class, 'services'])->name("service");
Route::get('projects', [HomeController::class, 'projects'])->name("projects");
Route::get('contact-us', [HomeController::class, 'contactUs'])->name("contact");
Route::get('blog', [HomeController::class, 'blog'])->name("blog");

