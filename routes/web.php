<?php

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

require __DIR__ . '/auth.php';

Route::get('/', function () {
    if (Auth::user()) {
        return redirect()->route('dashboard');
    }
    return view('pages.auth.login');
});

Route::group(['middleware' => 'auth'], function () {
    // Dashboard
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    // Criteria
    Route::group(['prefix' => 'kriteria', 'as' => 'criteria.'], function () {
        Route::get('/', 'App\Http\Controllers\Main\CriteriaController@index')->name('index');
        Route::post('/', 'App\Http\Controllers\Main\CriteriaController@store')->name('store');
        Route::match(['put', 'patch'], '/{criteria}', 'App\Http\Controllers\Main\CriteriaController@update')->name('update');
        Route::delete('/{criteria}', 'App\Http\Controllers\Main\CriteriaController@destroy')->name('destroy');
    });
    // User
    Route::group(['prefix' => 'pasien', 'as' => 'user.'], function () {
        Route::get('/', 'App\Http\Controllers\Main\UserController@index')->name('index');
        Route::post('/', 'App\Http\Controllers\Main\UserController@store')->name('store');
        Route::match(['put', 'patch'], '/{user}', 'App\Http\Controllers\Main\UserController@update')->name('update');
        Route::delete('/{user}', 'App\Http\Controllers\Main\UserController@destroy')->name('destroy');
    });
});
