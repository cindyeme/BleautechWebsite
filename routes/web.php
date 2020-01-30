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

//Routes for the getting the whole web pages on view root folder
Route::get('/', 'PagesController@getHome')->name('index');
Route::post('/message', 'PagesController@message');


Auth::routes();

Route::get('/admin', 'AdminController@index')->name('home');
Route::get('/feedback', 'AdminController@feedback')->name('feedback');
Route::get('/createBlog', 'AdminController@createBlog')->name('blog');
Route::post('/publish', 'AdminController@publishBlog');
Route::get('/viewBlog', 'AdminController@viewBlogs')->name('viewBlog');
Route::get('/delete/{id}','AdminController@deleteBlog');
Route::get('/edit/{id}','AdminController@viewEditBlog');
Route::post('/edit/{id}','AdminController@editBlog');
Route::get('/view/{id}','AdminController@view');