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
Route::group(['middleware' => ['auth']], function() {
    //Principal
    Route::get('/', function () {
        return view('welcome');
    });
    //\Principal
    
    //Dashboard del usuario
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    //\Dashboard del usuario

    Route::get('/home', 'HomeController@index')->name('home');
});

//Login
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
//\Login
