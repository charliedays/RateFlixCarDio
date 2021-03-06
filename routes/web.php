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
/*
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/feed', function () {
    return view('feed');
});*/
Route::get('/', function () {
    return view('feed');
});
Route::get('/summary', function () {
    return View::make('summaryMovies');
});
Route::get('/register', function () {
    return view('register');
});

Auth::routes();

Route::get('/home', function () {
    return view('summaryMovies');
});
//Route::get('/home', 'HomeController@index');
