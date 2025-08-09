<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'login')->name('login');
    Route::post('/post-login', 'postLogin')->name('postLogin');
    Route::get('/register', 'register')->name('register');
    Route::post('/post-register', 'postRegister')->name('postRegister');
});

Route::middleware('auth')->controller(ChatController::class)->group(function () {
    Route::get('/message', 'message')->name('message');
});