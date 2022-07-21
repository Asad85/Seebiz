<?php
use App\Http\Controllers\AuthController;
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

// Route::get('get', function () {
//     return view('layouts.app');
// });

// Route::get('home1', 'AuthController@home');
Route::get('home', 'AuthController@home')->name('home'); //home redirect kr raha reister ko


Route::get('registerview', 'AuthController@registerview')->name('reg_view');
Route::post('register', 'AuthController@register')->name('register');


Route::get('loginview', 'AuthController@loginview')->name('loginview');
Route::post('login', 'AuthController@login');


