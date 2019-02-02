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

Route::get('/','PostController@index');
Route::get('/create', function () {
    return view('mviews.create');
});
Route::get('/listofuser', 'PostController@userindex');
Auth::routes();
Route::resource('post','PostController');

Route::get('/user/{user}', 'PostController@user');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    return view('mlayout.masterAdmin');
});
