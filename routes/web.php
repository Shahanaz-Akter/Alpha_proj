<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/example', function () {
    return view('example');
});

Route::controller(App\Http\Controllers\Otp::class)->group(function () {

    Route::get('/signup', 'signUp')->name('signup');
    Route::post('/sendOtp', 'sendOtp')->name('sendOtp');
    Route::get('/otp/{id}', 'Otp')->name('otp');
    Route::post('/post_otp', 'post_Otp')->name('post_otp');
    Route::get('/tob', 'tob')->name('tob');
    Route::post('/post_tob', 'post_tob')->name('post_tob');
    Route::get('/location', 'location')->name('location');
    Route::post('/post_location', 'post_location')->name('post_location');
    Route::get('/pin', 'pin')->name('pin');
    Route::get('/reset_pin', 'reset_pin')->name('reset_pin');
    Route::post('/post_resetpin', 'post_resetpin')->name('post_resetpin');
});
