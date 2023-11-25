<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
Route::get('/about', 'AboutController@index');
Route::get('/projects', 'ProjectsController@index');
Route::get('/contact', 'ContactController@index');


Route::get('/', function () {
    return view('welcome');
});
