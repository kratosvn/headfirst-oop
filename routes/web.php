<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', 'HomeController@index');
Route::get('clone', 'CloneController@index');
