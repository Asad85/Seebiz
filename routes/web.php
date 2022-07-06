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




// Route::resource('index', 'MoviesController@index');

Route::resource('movies', MoviesController::class);

// Route::resource('movies', MoviesController::class)->only([
//     'index', 'create' , 'store'
// ]);

// Route::resource('movies', MoviesController::class)->only([
//     'edit', 'show' , 'update' , 'delete', 'index'
// ]);