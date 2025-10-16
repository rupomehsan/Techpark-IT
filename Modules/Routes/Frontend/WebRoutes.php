<?php

use Illuminate\Support\Facades\Route;
use Modules\Controllers\Frontend\Auth\AuthController;



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
// Route::get('/', [FrontendController::class, 'HomePage'])->name("website");
// Route::get('/vocabulary', [FrontendController::class, 'VocabularyPage'])->name("vocabulary");
// Route::get('/vocabulary-test', [FrontendController::class, 'VocabularyTestPage'])->name("vocabulary-test");
// Route::get('/story', [FrontendController::class, 'StoryPage'])->name("story");
// Route::get('/story-test', [FrontendController::class, 'StoryTestPage'])->name("story-test");
// Route::get('/profile', [FrontendController::class, 'ProfilePage'])->name("profile");
