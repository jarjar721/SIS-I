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

//Todo lo que se haga dentro de esto solo podra ser visto si un usuario esta logged
Route::group(['middleware' => ['auth']], function() {
    //Principal
    Route::get('/', function () {
        return view('welcome');
    });
    //\Principal
    
    //Dashboard del usuario
    Route::get('/dashboard', function () {
        return view('usuarios.dashboard');
    });
    //\Dashboard del usuario

    //Usuario
    Route::get('/usuario','UserController@lista');
    Route::get('/usuario/modificar/{Codigo}','UserController@edit');
    Route::post('/usuario/update','UserController@actualizar');
    Route::get('/usuario/eliminar/{Codigo}','UserController@delete');
    Route::get('/users','UserController@anyData')->name('user.data');
    Route::post('image-upload', 'UserController@imageUploadPost')->name('image.upload.post');
    //\Usuario

    //Rol
    Route::get('/rol','RolController@lista');
    Route::post('/rol/store','RolController@store');
    Route::get('/rol/modificar/{Codigo}','RolController@edit');
    Route::post('/rol/update','RolController@actualizar');
    Route::get('/rol/eliminar/{Codigo}','RolController@delete');
    Route::get('/roles','RolController@anyData')->name('rol.data');
    //\Rol

    //Investigacion
    Route::get('/nueva_investigacion', function () {
        return view('investigacion.nueva');
    });
    Route::get('/ver_investigacion', function () {
        return view('investigacion.consultar');
    });
    //\Investigacion

    Route::get('/home', 'HomeController@index')->name('home');
});
//\

//Login
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
//\Login
