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
Route::auth();



Route::get('/', function () {return view('auth.login');});
//Route::get('/login', 'auth\AuthController@postLogin');
Route::post('/login','LoginController@postLogin');
//Route::post('/login','Auth\LoginController@postLogin');

//Route::get('table','HomeController@tableUser');

//Route::resource('articles','SurveyController');

Route::get('home','HomeController@myHome');


