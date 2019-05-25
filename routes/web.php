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

Route::get('/dashboard', function () {
    return view('dashboard');
});

//Login
Auth::routes(['register' => false]);
Route::get('login#signup', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('login#signup', 'Auth\RegisterController@register');
//\Login

Route::get('/home', 'HomeController@index')->name('home');
