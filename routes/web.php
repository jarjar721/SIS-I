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
            return view('welcome');
        });
        //\Dashboard del usuario

        //Usuario
        Route::get('/audit', 'UserController@audit');
        Route::get('/audit_load', 'UserController@audit_load')->name('audit.data');
        Route::get('/usuario', 'UserController@lista');
        Route::get('/usuario/modificar/{Codigo}', 'UserController@edit');
        Route::post('/usuario/update', 'UserController@actualizar');
        Route::get('/usuario/eliminar/{Codigo}', 'UserController@delete');
        Route::get('/users', 'UserController@anyData')->name('user.data');
        Route::post('image-upload', 'UserController@imageUploadPost')->name('image.upload.post');
        //\Usuario
        //Persona
        Route::get('/institucion', 'UserController@instituciones');
        Route::get('/load_institucion', 'UserController@inst_load')->name('inst.data');
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
        Route::get('/investigacion/eliminar/{Codigo}', 'InvestigacionController@delete');
        Route::post('/investigacion/store', 'InvestigacionController@store');
        Route::get('/inv', 'InvestigacionController@getInvData')->name('inv.data');
        //\Investigacion

        //Holograma
        Route::get('/investigacion/holograma/{id}', 'HologramaController@holograma');
        Route::get('/pregunta_objetivo_2', 'HologramaController@getPreguntaObjetivo2')->name('p_o_2.data');
        Route::get('/tabla_operacionalizacion', 'HologramaController@getTablaOperacionalizacion')->name('op_table.data');
        //\Holograma

        //Evento
        Route::get('/investigacion/{id}/evento', 'EventoController@eventos');
        Route::get('/evento/eliminar/{Codigo}/{id}', 'EventoController@delete');
        Route::post('/evento/store', 'EventoController@store');
        Route::get('/load_evento_investigacion', 'EventoController@getEventoData')->name('evento.data');
        //\Evento

        //Sinergia
        Route::get('/investigacion/{idInv}/evento/{idEvento}/sinergia', 'SinergiaController@sinergias');
        Route::get('/sinergia/eliminar/{Codigo}/{id}/{idE}', 'SinergiaController@delete');
        Route::post('/sinergia/store', 'SinergiaController@store');
        Route::get('/load_sinergia_evento', 'SinergiaController@getSinergiaData')->name('sinergia_evento.data');
        //\Sinergia

        //Indicio
        Route::get('/investigacion/{idInv}/evento/{idEvento}/sinergia/{idSinergia}/indicio', 'IndicioController@indicios');
        Route::get('/indicio/eliminar/{Codigo}/{id}/{idE}/{idS}', 'IndicioController@delete');
        Route::post('/indicio/store', 'IndicioController@store');
        Route::get('/load_indicio_sinergia', 'IndicioController@getIndicioData')->name('indicio_sinergia.data');
        //\Indicio

        //Item
        Route::get('/investigacion/{idInv}/evento/{idEvento}/sinergia/{idSinergia}/indicio/{idIndicio}/item', 'ItemController@items');
        Route::get('/item/eliminar/{Codigo}/{id}/{idE}/{idS}/{idI}', 'ItemController@delete');
        Route::post('/item/store', 'ItemController@store');
        Route::get('/load_item_intrumento', 'ItemController@getItemData')->name('item.data');
        Route::get('/load_item_intrumento/{id}', 'ItemController@getItemDetailsData')->name('item_details.data');
        //\Item

        //MAITI
        Route::get('/investigacion/MAITI/{id}', 'MAITIController@getMAITI');
        //\MAITI

        //Justificación
        Route::get('/investigacion/{id}/justificacion', 'JustificacionController@inicio');
        Route::get('/justificacion/eliminar/{Codigo}/{id}', 'JustificacionController@delete');
        Route::post('/justificacion/store', 'JustificacionController@store');
        Route::get('/load_justificacion', 'JustificacionController@getJustificacionData')->name('justificacion.data');
        //\Justificación

        //Contexto
        Route::get('/investigacion/{id}/contexto', 'ContextoController@inicio');
        Route::get('/contexto/eliminar/{Codigo}/{id}', 'ContextoController@delete');
        Route::post('/contexto/store', 'ContextoController@store');
        Route::get('/load_contexto', 'ContextoController@getContextoData')->name('contexto.data');
        //\Contexto

        //Unidad de Información
        Route::get('/investigacion/unidad_informacion', function () {
            return view('investigacion.unidad_informacion');
        });
        //\Unidad de Información

        //Modificar
        Route::get('/investigacion/modificar/{Codigo}', 'InvestigacionController@edit');
        Route::get('/evento/modificar/{Codigo}/{id}', 'EventoController@edit');
        Route::get('/sinergia/modificar/{Codigo}/{id}/{idE}', 'SinergiaController@edit');
        Route::get('/indicio/modificar/{Codigo}/{id}/{idE}/{idS}', 'IndicioController@edit');
        Route::get('/item/modificar/{Codigo}/{id}/{idE}/{idS}/{idI}', 'ItemController@edit');
        Route::get('/justificacion/modificar/{Codigo}/{id}', 'JustificacionController@edit');
        Route::get('/contexto/modificar/{Codigo}/{id}', 'ContextoController@edit');
        Route::post('/investigacion/edit', 'InvestigacionController@update');
        Route::post('/evento/edit', 'EventoController@update');
        Route::post('/sinergia/edit', 'SinergiaController@update');
        Route::post('/indicio/edit', 'IndicioController@update');
        Route::post('/item/edit', 'ItemController@update');
        Route::post('/justificacion/edit', 'JustificacionController@update');
        Route::post('/contexto/edit', 'ContextoController@update');
        //\Modificar

        //EN CONSTRUCCION
        Route::get('/perfil', 'PerfilController@getPerfil');
        Route::get('/editar-perfil', function () {
            return view('usuarios.persona.editar_perfil');
        });
        //\EN CONSTRUCCION

    });

    //Persona (Si no se ha creado)
    Route::get('/usuario/persona', function () {
        return view('usuarios.persona.configuracion');
    });
    Route::post('/usuario/persona/store', 'UserController@crear');
    //\Persona
});
//\

//Login
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
//\Login
