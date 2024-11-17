<?php

use App\Http\Controllers\AuthController;

// Sign In Routes
Route::get('/signin', [AuthController::class, 'showSignInForm'])->name('signin');
Route::post('/signin', [AuthController::class, 'handleSignIn'])->name('signin.submit');

// Sign Up Routes
Route::get('/signup', [AuthController::class, 'showSignUpForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'handleSignUp'])->name('signup.submit');

// Other Routes
Route::view('/', 'index')->name('home');
Route::view('/coaches_profile', 'coaches_profile')->name('coaches_profile');
Route::view('/payment', 'payment')->name('payment');
