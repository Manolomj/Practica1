<?php

Route::get('/', function () {
    return view('welcome');
});

Route::post('auth/login', 'PrimerController@postLogin');
Route::get('auth/logout', 'PrimerController@getLogout');
Route::get('forgoten','PrimerController@forgoten');
Route::get('home/','PrimerController@home');
Route::get('login','PrimerController@formulario');
Route::any('nuevaruta/{msj?}','PrimerController@nuevaruta');
Route::get('perfilus','PrimerController@perfilus');
Route::get('rutalogin/', 'HomeController@home');
Route::get('rutalogin/home', 'HomeController@home');
Route::any('userhome/','PrimerController@userhome');

