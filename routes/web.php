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
    return view('Home');
});
Route::get('youtube/', function () {
    return view('youtube/index');
});
Route::get('youtube/index', 'App\Http\Controllers\YouTubeController@index')->name('index');
Route::get('youtube/results', 'App\Http\Controllers\YouTubeController@results')->name('results');
Route::get('youtube/watch/{id}', 'App\Http\Controllers\YouTubeController@watch')->name('watch');
