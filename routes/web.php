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
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['persona']], function () {
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
        Route::get('/usuario', 'UserController@lista');
        Route::get('/usuario/modificar/{Codigo}', 'UserController@edit');
        Route::post('/usuario/update', 'UserController@actualizar');
        Route::get('/usuario/eliminar/{Codigo}', 'UserController@delete');
        Route::get('/users', 'UserController@anyData')->name('user.data');
        Route::post('image-upload', 'UserController@imageUploadPost')->name('image.upload.post');
        //\Usuario
        //Persona

        //\Persona

        //Rol
        Route::get('/rol', 'RolController@lista');
        Route::post('/rol/store', 'RolController@store');
        Route::get('/rol/modificar/{Codigo}', 'RolController@edit');
        Route::post('/rol/update', 'RolController@actualizar');
        Route::get('/rol/eliminar/{Codigo}', 'RolController@delete');
        Route::get('/roles', 'RolController@anyData')->name('rol.data');
        //\Rol

        //Investigacion
        Route::get('/investigacion/delimitacion_tema', 'InvestigacionController@d_tema');
        Route::post('/investigacion/store', 'InvestigacionController@store');
        Route::get('/inv', 'InvestigacionController@getInvData')->name('inv.data');        
        //\Investigacion

        //Holograma
        Route::get('/investigacion/holograma/{id}', 'HologramaController@holograma');
        Route::get('/pregunta_objetivo_2/{id}', 'HologramaController@getPreguntaObjetivo2');
        Route::get('/tabla_operacionalizacion/{id}', 'HologramaController@getTablaOperacionalizacion');
        //\Holograma

        //Evento
        Route::get('/investigacion/evento', function () {
            return view('investigacion.evento');
        });
        Route::get('/investigacion/sinergia', function () {
            return view('investigacion.sinergia');
        });
        Route::get('/investigacion/indicio', function () {
            return view('investigacion.indicio');
        });
        Route::get('/load_evento_investigacion', 'EventoController@getEventoData')->name('evento_investigacion.data');        
        Route::get('/load_sinergia_evento', 'EventoController@getSinergiaData')->name('sinergia_evento.data'); 
        Route::get('/load_indicio_sinergia', 'EventoController@getIndicioData')->name('indicio_sinergia.data');              
        //\Evento

        //Metodología
        Route::get('/investigacion/item', function () {
            return view('investigacion.item');
        });
        Route::get('/load_item_intrumento', 'ItemController@getItemData')->name('item.data');
        //\Metodología

        //Justificación
        Route::get('/investigacion/justificacion', function () {
            return view('investigacion.justificacion');
        });
        Route::get('/load_justificacion', 'JustificacionController@getJustificacionData')->name('justificacion.data');        
        //\Justificación

        //Unidad de Información
        Route::get('/investigacion/unidad_informacion', function () {
            return view('investigacion.unidad_informacion');
        });
        //\Unidad de Información

        //MAITI
        Route::get('/investigacion/MAITI/{id}', 'MAITIController@getMAITI');
        //\MAITI
    });

    //Persona (Si no se ha creado)
    Route::get('/usuario/persona', function () {
        return view('usuarios.persona.crear');
    });
    Route::post('/usuario/persona/store', 'UserController@crear');
    //\Persona
});
//\

//Login
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
//\Login
