<?php

use Illuminate\Support\Facades\Route;

// Middleware Guest
Route::middleware('guest')->group(function () {
    // Register
    Route::get('register', 'App\Http\Controllers\Auth\RegisteredUserController@create')->name('register');
    Route::post('register', 'App\Http\Controllers\Auth\RegisteredUserController@store');
    // Login
    Route::get('login', 'App\Http\Controllers\Auth\AuthenticatedSessionController@create')->name('login');
    Route::post('login', 'App\Http\Controllers\Auth\AuthenticatedSessionController@store');
});

// Middleware Auth
Route::middleware('auth')->group(function () {
    Route::post('logout', 'App\Http\Controllers\Auth\AuthenticatedSessionController@destroy')->name('logout');
});
