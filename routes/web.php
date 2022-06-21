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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('search', 'App\Http\Controllers\ShowController@search')->name('shows.search');

Route::resource('shows', App\Http\Controllers\ShowController::class)->except('store');

Route::post('search', 'App\Http\Controllers\ShowController@store')->name('shows.store');