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

// Route::get('/', function () {
//     if (Auth::user()) {
//         return redirect()->route('dashboard');
//     }
//     return view('pages.auth.login');
// });

Route::get('/', 'App\Http\Controllers\LandingPageController@index')->name('landing-page');

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
    // Sub Criteria
    Route::group(['prefix' => 'sub-kriteria', 'as' => 'sub-criteria.'], function () {
        Route::get('/', 'App\Http\Controllers\Main\SubCriteriaController@index')->name('index');
        Route::post('/', 'App\Http\Controllers\Main\SubCriteriaController@store')->name('store');
        Route::match(['put', 'patch'], '/{subCriteria}', 'App\Http\Controllers\Main\SubCriteriaController@update')->name('update');
        Route::delete('/{subCriteria}', 'App\Http\Controllers\Main\SubCriteriaController@destroy')->name('destroy');
    });
    // Disease
    Route::group(['prefix' => 'penyakit', 'as' => 'disease.'], function () {
        Route::get('/', 'App\Http\Controllers\Main\DiseaseController@index')->name('index');
        Route::post('/', 'App\Http\Controllers\Main\DiseaseController@store')->name('store');
        Route::match(['put', 'patch'], '/{disease}', 'App\Http\Controllers\Main\DiseaseController@update')->name('update');
        Route::delete('/{disease}', 'App\Http\Controllers\Main\DiseaseController@destroy')->name('destroy');
    });
    // Prevention
    Route::group(['prefix' => 'pencegahan-penyakit', 'as' => 'prevention.'], function () {
        Route::get('/', 'App\Http\Controllers\Main\PreventionController@index')->name('index');
        Route::post('/', 'App\Http\Controllers\Main\PreventionController@store')->name('store');
        Route::match(['put', 'patch'], '/{prevention}', 'App\Http\Controllers\Main\PreventionController@update')->name('update');
        Route::delete('/{prevention}', 'App\Http\Controllers\Main\PreventionController@destroy')->name('destroy');
    });
    // User
    Route::group(['prefix' => 'pasien', 'as' => 'user.'], function () {
        Route::get('/', 'App\Http\Controllers\Main\UserController@index')->name('index');
        Route::post('/', 'App\Http\Controllers\Main\UserController@store')->name('store');
        Route::match(['put', 'patch'], '/{user}', 'App\Http\Controllers\Main\UserController@update')->name('update');
        Route::delete('/{user}', 'App\Http\Controllers\Main\UserController@destroy')->name('destroy');
    });
    // Hospital
    Route::group(['prefix' => 'rumah-sakit', 'as' => 'hospital.'], function () {
        Route::get('/', 'App\Http\Controllers\Main\HospitalController@index')->name('index');
        Route::post('/', 'App\Http\Controllers\Main\HospitalController@store')->name('store');
        Route::match(['put', 'patch'], '/{hospital}', 'App\Http\Controllers\Main\HospitalController@update')->name('update');
        Route::delete('/{hospital}', 'App\Http\Controllers\Main\HospitalController@destroy')->name('destroy');
    });
    // Result Recommendation
    Route::group(['prefix' => 'rekomendasi', 'as' => 'recommendation.'], function () {
        Route::get('/', 'App\Http\Controllers\Result\RecommendationController@index')->name('index');
        Route::post('/', 'App\Http\Controllers\Result\RecommendationController@store')->name('store');
        Route::match(['put', 'patch'], '/{result}', 'App\Http\Controllers\Result\RecommendationController@update')->name('update');
        Route::delete('/{result}', 'App\Http\Controllers\Result\RecommendationController@destroy')->name('destroy');
    });
    // Result Complaint
    Route::group(['prefix' => 'keluhan-sakit', 'as' => 'complaint.'], function () {
        Route::get('/', 'App\Http\Controllers\Result\ComplaintController@index')->name('index');
        Route::get('/{complaint}', 'App\Http\Controllers\Result\ComplaintController@show')->name('show');
        Route::post('/', 'App\Http\Controllers\Result\ComplaintController@store')->name('store');
        Route::delete('/{complaint}', 'App\Http\Controllers\Result\ComplaintController@destroy')->name('destroy');
    });
});
