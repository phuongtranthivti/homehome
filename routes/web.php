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

Route::get('/login', 'AuthController@getLogin');
Route::post('/login', 'AuthController@postLogin');

Route::get('/signup', 'AuthController@getSignup');
Route::post('/signup', 'AuthController@postSignup');

//Auth::routes();

Route::get('/company', 'AuthController@getCompany');
Route::post('/company', 'AuthController@postCompany');
Route::get('/detail/{code}', 'AuthController@getDetail');

//Route::get('/home', 'HomeController@index')->name('home');
