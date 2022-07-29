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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::view('index','layouts/app');
// Route::post('index', 'Modal_Controller@store');
Route::resource('/', ModalController::class);
Route::get('/edit/{id}', 'ModalController@edit');
Route::post('/update/{id}', 'ModalController@update');
Route::post('/delete/{id}', 'ModalController@destroy');
// Route::resource('/studentadd', Modal_Controller::class);

