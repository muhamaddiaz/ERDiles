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
    Route::get('/materi/bagian1', 'MateriController@materi1')->name('materi.bagian1');
    Route::get('/materi/bagian2', 'MateriController@materi2')->name('materi.bagian2');
    Route::get('/materi/bagian3', 'MateriController@materi3')->name('materi.bagian3');
    Route::get('/materi/bagian4', 'MateriController@materi4')->name('materi.bagian4');
    Route::resource('/user', 'UserController');
    Route::resource('/forum', 'ForumController');
    Route::resource('/materi', 'MateriController');
    Route::resource('/user', 'UserController');

    

    Route::get('/home', 'HomeController@index')->name('home');
});
