<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('articles', 'CarController');

Route::resource('create', 'CarController');

Route::get('/create', 'CarController@store');

Route::post('/create', 'CarController@store');

Route::get("{{ route('articles.update') }}", 'CarController@update');

Route::post("{{ route('articles.update') }}", 'CarController@update');

Route::get("/articles/{id}", 'CarController@destroy');
