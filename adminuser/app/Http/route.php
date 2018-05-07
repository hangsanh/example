<?php

Route::get('login','LoginController@getLogin');
Route::post('login','LoginController@postLogin');

Route::get('','HomeController@getIndex');
?>