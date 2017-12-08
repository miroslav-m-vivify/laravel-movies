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

Route::get('/', 'MoviesController@index');

Route::get('/movies', 'MoviesController@index');

Route::get('/movies/{id}', 'MoviesController@show');

Route::get('/create', 'MoviesController@create');

Route::post('/create', [
    'as' => 'movies.create',
    'uses' => 'MoviesController@store'
]);

Route::post('/comments/add/{id}', 'CommentsController@store');

Route::get('/genres/{genre}', 'GenresController@show');