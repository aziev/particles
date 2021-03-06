<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'ArticleController@index');
Route::get('category/{slug}', 'ArticleController@index');
Route::resource('article', 'ArticleController', [
    'except' => ['index'],
]);

Route::resource('categories', 'CategoryController');

Route::get('tag/{title}', 'ArticleController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
