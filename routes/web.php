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
    return view('staticpages.index');
})->middleware('guest');

Auth::routes();

Route::middleware('auth')->group(function() {
    Route::resource('/user', 'UserController');
    Route::resource('/forum', 'ForumController');
    Route::resource('/materi', 'MateriController');
    Route::resource('/user', 'UserController');
    Route::get('/home', 'HomeController@index')->name('home');
});
