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
<<<<<<< HEAD
/*
Route::get('/', function () {
=======

Route::get('/welcome', function () {
>>>>>>> origin/develop
    return view('welcome');
});*/
Route::get('/', function () {
    return view('feed');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
