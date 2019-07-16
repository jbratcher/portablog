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

Auth::routes();

// Vue Router control
Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');

Route::get('/', 'PostController@all');
Route::get('/posts/{post}', 'PostController@single');

Route::get('/home', 'HomeController@index')->name('home');

// Vue Router control admin section
Route::get('/admin/{any}', 'AdminController@index')->where('any', '.*');

Route::get('/projects', 'ProjectsController@index')->name("projects");