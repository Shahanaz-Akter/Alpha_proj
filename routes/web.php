<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/example', function () {
    return view('example');
});

Route::controller(App\Http\Controllers\Otp::class)->group(function () {

    Route::get('/', 'signUp')->name('signup');
    Route::post('/sendOtp', 'sendOtp')->name('sendOtp');
    Route::get('/otp/{id}', 'Otp')->name('otp');
    Route::post('/post_otp', 'post_Otp')->name('post_otp');
    Route::get('/tob/{id}', 'tob')->name('tob');
    Route::post('/post_tob/{id}', 'post_tob')->name('post_tob');
    Route::get('/location/{id}', 'location')->name('location');
    Route::post('/post_location/{id}', 'post_location')->name('post_location');
    Route::get('/pin/{id}', 'pin')->name('pin');
    Route::post('/post_pin/{id}', 'post_pin')->name('post_pin');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/login', 'login')->name('login');
    Route::post('/post_login', 'post_login')->name('post_login');


    Route::get('/reset_pin', 'reset_pin')->name('reset_pin');
    Route::post('/post_resetpin', 'post_resetpin')->name('post_resetpin');

    Route::get('/otp', 'ottp')->name('otp');
});
