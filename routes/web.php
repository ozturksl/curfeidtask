<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('front.login');
})->name('login');

Route::get('/register', function () {
    return view('front.register');
})->name('register');

Route::get('/verifiction', function () {
    return view('front.code_confirm');
})->name('code.confirm');

Route::get('/forgotpass', function () {
    return view('front.forgot_password');
})->name('password.forgot');

Route::get('/resetpass', function () {
    return view('front.password_reset');
})->name('password.reset');

Route::get('/privacypol', function () {
    return view('front.privacy_policy');
})->name('privacy.policy');

Route::get('/terms', function () {
    return view('front.terms');
})->name('terms');
