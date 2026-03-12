<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



use App\Modules\Controllers\Frontend\FrontendController;
use App\Modules\Controllers\Frontend\Auth\AuthController as BackendAuthController;


// Route::get('/', [FrontendController::class, 'HomePage'])->name('HomePage');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

Route::get('/login', [BackendAuthController::class, 'LoginPage'])->name('LoginPage');
Route::get('/register', [BackendAuthController::class, 'RegisterPage'])->name('RegisterPage');
Route::get('/forgot-password', [BackendAuthController::class, 'ForgotPassword'])->name('ForgotPassword');

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

// Website Routes
// Website Routes
Route::get('/', [HomeController::class, 'index'])->name("website");
Route::get('about-us', [HomeController::class, 'aboutUs'])->name("aboutUs");
Route::get('services', [HomeController::class, 'services'])->name("service");
Route::get('projects', [HomeController::class, 'projects'])->name("projects");
Route::get('contact-us', [HomeController::class, 'contactUs'])->name("contact");
Route::get('blog', [HomeController::class, 'blog'])->name("blog");

