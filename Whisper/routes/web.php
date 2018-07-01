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

Route::get('/login', function () {
    return view('login');
});

// get
Route::get('/', 'ArticlesController@index');
Route::get('articles/index', 'ArticlesController@index');
Route::get('articles/show/{id}', 'ArticlesController@show');
Route::get('articles/edit/{id}', 'ArticlesController@edit');
Route::get('articles/destroy/{id}', 'ArticlesController@destroy');

// post
Route::post('articles/store', 'ArticlesController@store');
Route::post('articles/update/{id}', 'ArticlesController@update');

// resource
Route::resource('articles', 'ArticlesController');