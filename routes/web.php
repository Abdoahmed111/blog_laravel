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

Route::get('/', 'BlogController@index')->name('blogs.index');
Route::get('/blogs/create', 'BlogController@create')->name('blogs.create')->middleware('auth');
Route::post('/blogs', 'BlogController@store')->name('blogs.store')->middleware('auth');
Route::get('/blogs/{id}', 'BlogController@show')->name('blogs.show')->middleware('auth');
Route::delete('/blogs/{id}', 'BlogController@destroy')->name('blogs.destroy')->middleware('auth');
Route::get('/blogs/{id}/edit', 'BlogController@edit')->name('blogs.edit')->middleware('auth');
Route::post('/blogs/{id}/update', 'BlogController@update')->name('blogs.update')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');