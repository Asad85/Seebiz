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
    return view('welcome');
});

Route::get('index'            , 'PostsController@index');
Route::get('show/{id}'        , 'PostsController@show');
Route::get('services'         , 'PostsController@services')->name('service');
Route::get('create'           , 'PostsController@create')->name('create');
Route::post('store'           , 'PostsController@store');
Route::get('aboutus'          , 'PostsController@aboutus');
Route::get('contact'          , 'PostsController@contact')->name('contact'); //->name('contact')
Route::get('home'             , 'PostsController@index');
Route::get('edit/{id}'        , 'PostsController@edit');
Route::post('update/{id}/post', 'PostsController@update')->name('update-post');
Route::delete('delete/{id}'   , 'PostsController@destroy')->name('delete-post');

// name parameter pass karny py error dy raha tha (Edit) 
// {{ route('home') }}"    class="nav-link px-2 text-secondary">Home</a></li>
//           <li><a href="{{ route('service') }}"    class="nav-link px-2 text-white"> Services</a></li>
//           <li><a href="{{ route('aboutus') }}"    class="nav-link px-2 text-white"> About Us</a></li>
//           <li><a href="{{ route('contact') }}"