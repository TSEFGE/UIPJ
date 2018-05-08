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

Auth::routes();

Route::get('/', function () {
    return redirect()->route('login');
})->middleware('guest');

Route::get('/home', 'HomeController@index')->name('home');

//Protección de rutas
Route::middleware(['auth'])->group(function () {
    /*---------Rutas para carpeta-------------*/
    Route::get('/iniciar-carpeta', 'CarpetaController@showForm')->name('inicio');
    Route::post('store-carpeta', 'CarpetaController@storeCarpeta')->name('store.carpeta');
    Route::get('/carpeta-inicial/{id}', 'CarpetaController@index')->name('carpeta');
    Route::get('carpeta/{id}', [
        'uses' => 'CarpetaController@verDetalle',
        'as'   => 'view.carpeta',
    ]);

    /*---------Rutas para denunciante-------------*/
    Route::get('carpeta/{idCarpeta}/agregar-denunciante', 'DenuncianteController@showForm')->name('new.denunciante');
    Route::post('store-denunciante', 'DenuncianteController@storeDenunciante')->name('store.denunciante');
    Route::get('carpeta/{idCarpeta}/editar-denunciante/{id}', 'DenuncianteController@edit')->name('edit.denunciante');
    Route::put('update-denunciante/{id}', 'DenuncianteController@update')->name('update.denunciante');

    /*---------Rutas para testigo-------------*/
    Route::get('carpeta/{idCarpeta}/agregar-testigo', 'TestigoController@showForm')->name('new.testigo');
    Route::post('store-testigo', 'TestigoController@storeTestigo')->name('store.testigo');
    Route::get('carpeta/{idCarpeta}/editar-testigo/{id}', 'TestigoController@edit')->name('edit.testigo');
    Route::put('update-testigo/{id}', 'TestigoController@update')->name('update.testigo');

    /*---------Rutas para denunciado-------------*/
    Route::get('carpeta/{idCarpeta}/agregar-denunciado', 'DenunciadoController@showForm')->name('new.denunciado');
    Route::post('store-denunciado', 'DenunciadoController@storeDenunciado')->name('store.denunciado');
    Route::get('carpeta/{idCarpeta}/editar-denunciado/{id}', 'DenunciadoController@edit')->name('edit.denunciado');
    Route::put('update-denunciado/{id}', 'DenunciadoController@update')->name('update.denunciado');

    /*---------Rutas para abogado-------------*/
    Route::get('carpeta/{idCarpeta}/agregar-abogado', 'AbogadoController@showForm')->name('new.abogado');
    Route::post('store-abogado', 'AbogadoController@storeAbogado')->name('store.abogado');
    Route::get('carpeta/{idCarpeta}/editar-abogado/{id}', 'AbogadoController@edit')->name('edit.abogado');
    Route::put('update-abogado/{id}', 'AbogadoController@update')->name('update.abogado');

    /*---------Rutas para defensa-------------*/
    Route::get('carpeta/{idCarpeta}/agregar-defensa', 'DefensaController@showForm')->name('new.defensa');
    Route::post('store-defensa', 'DefensaController@storeDefensa')->name('store.defensa');
    Route::get('carpeta/{idCarpeta}/editar-defensa/{id}', 'DefensaController@edit')->name('edit.defensa');
    Route::put('update-defensa/{id}', 'DefensaController@update')->name('update.defensa');

    /*---------Rutas para autoridad-------------*/
    Route::get('carpeta/{idCarpeta}/agregar-autoridad', 'AutoridadController@showForm')->name('new.autoridad');
    Route::post('store-autoridad', 'AutoridadController@storeAutoridad')->name('store.autoridad');
    Route::get('carpeta/{idCarpeta}/editar-autoridad/{id}', 'AutoridadController@edit')->name('edit.autoridad');
    Route::put('update-autoridad/{id}', 'AutoridadController@update')->name('update.autoridad');

    /*---------Rutas para familiar-------------*/
    Route::get('carpeta/{idCarpeta}/agregar-familiar', 'FamiliarController@showForm')->name('new.familiar');
    Route::post('store-familiar', 'FamiliarController@storeFamiliar')->name('store.familiar');
    Route::get('carpeta/{idCarpeta}/editar-familiar/{id}', 'FamiliarController@edit')->name('edit.familiar');
    Route::put('update-familiar/{id}', 'FamiliarController@update')->name('update.familiar');

    /*---------Rutas para delito-------------*/
    Route::get('carpeta/{idCarpeta}/agregar-delito', 'DelitoController@showForm')->name('new.delito');
    Route::post('storedelito', 'DelitoController@storeDelito')->name('store.delito');
    Route::get('carpeta/{idCarpeta}/editar-delito/{id}', 'DelitoController@edit')->name('edit.delito');
    Route::put('update-delito/{id}', 'DelitoController@update')->name('update.delito');

    /*---------Rutas para acusacion-------------*/
    Route::get('carpeta/{idCarpeta}/agregar-acusacion', 'AcusacionController@showForm')->name('new.acusacion');
    Route::post('store-acusacion', 'AcusacionController@storeAcusacion')->name('store.acusacion');
    Route::get('carpeta/{idCarpeta}/editar-acusacion/{id}', 'AcusacionController@edit')->name('edit.acusacion');
    Route::put('update-acusacion/{id}', 'AcusacionController@update')->name('update.acusacion');

    /*---------Rutas para vehiculo-------------*/
    Route::get('carpeta/{idCarpeta}/agregar-vehiculo', 'VehiculoController@showForm')->name('new.vehiculo');
    Route::post('store-vehiculo', 'VehiculoController@storeVehiculo')->name('store.vehiculo');
    Route::get('carpeta/{idCarpeta}/editar-vehiculo/{id}', 'VehiculoController@edit')->name('edit.vehiculo');
    Route::put('update-vehiculo/{id}', 'VehiculoController@update')->name('update.vehiculo');

    /*---------Rutas para diligencias-------------*/
    Route::get('carpeta/{idCarpeta}/generar-diligencia-pm', 'ColaboracionController@showForm')->name('new.colaboracionpm');
    Route::get('carpeta/{idCarpeta}/generar-diligencia-sp', 'ColaboracionController@showForm2')->name('new.colaboracionsp');

    /*---------Rutas para complemento-------------*/
    Route::get('carpeta/{idCarpeta}/denunciante/{idDenunciante}/complemento', 'DenuncianteController@showComplement')->name('complement.denunciante');
    Route::post('denunciante/storecomplemento', 'DenuncianteController@storeComplement')->name('store.complement1');
    Route::get('carpeta/{idCarpeta}/denunciado/{idDenunciado}/complemento', 'DenunciadoController@showComplement')->name('complement.denunciado');
    Route::post('denunciado/storecomplemento', 'DenunciadoController@storeComplement')->name('store.complement2');

    /*---------Rutas para generación de documentos-------------*/
    Route::get('constancia-hechos/{idDenunciante}', [
        'as'   => 'constancia.hechos',
        'uses' => 'DocxMakerController@getConstanciaHechos',
    ]);
    Route::get('formato-denuncia/{idAcusacion}', [
        'as'   => 'formato.denuncia',
        'uses' => 'DocxMakerController@getFormatoDenuncia',
    ]);
    Route::post('colaboracion-pm', [
        'as'   => 'colaboracion.pm',
        'uses' => 'DocxMakerController@getFormatoColaboracionPm',
    ]);
    Route::post('colaboracion-sp', [
        'as'   => 'colaboracion.sp',
        'uses' => 'DocxMakerController@getFormatoColaboracionSp',
    ]);
    Route::post('diligencia-sp', 'DiligenciaSPController@enviarSolicitud')->name('diligencia.sp');

    /*---------Rutas para el libro de gobierno-------------*/
    Route::get('libro-gobierno', 'LibroGobiernoController@index')->name('libro.gobierno');
    Route::get('api/libro', 'LibroGobiernoController@apiLibro')->name('api.libro');
    Route::get('api/rango', 'LibroGobiernoController@apiLibroRango')->name('api.rango');

    /*---------Rutas para el libro de oficios-------------*/
    Route::get('libro-oficios', 'LibroOficiosController@index')->name('libro.oficios');
    Route::get('api/oficios', 'LibroOficiosController@apiLibro')->name('api.oficios');

    /*---------Rutas para la bitácora-------------*/
    Route::get('bitacora', 'BitacoraController@index')->name('bitacora');
    Route::get('api/bitacora', 'BitacoraController@apiBitacora')->name('api.bitacora');

    /*-------------- RUTA PARA NARRACIONES---------------------*/
    Route::get('narracion/{id}/ver', 'NarracionController@ver')->name('ver.narracion');
    Route::get('narracion/{idCarpeta}/{idInvolucrado}/{tipoInvolucrado}', 'NarracionController@index')->name('narracion.index');
    Route::post('narracion/create', 'NarracionController@store')->name('store.narracion');

    /*-------------- RUTA PARA CITATORIOS---------------------*/
    Route::get('agenda', 'CitatorioController@index')->name('agenda');
    Route::get('citatorio/{idCarpeta}/{idCitado}/{tipoInvolucrado}', 'CitatorioController@create')->name('citatorio');
    Route::post('citatorio/create', 'CitatorioController@store')->name('store.citatorio');
    Route::get('citatorio/{id}/edit', 'CitatorioController@edit')->name('edit.citatorio');
    Route::put('citatorio/update/{id}', 'CitatorioController@update')->name('update.citatorio');

    /*---------- Rutas utiliadas desde javascript ----------*/
    Route::whitelist(function () {
        /*---------Rutas para armar rfc-------------*/
        Route::post('rfc-moral', 'RegistroController@rfcMoral')->name('rfc.moral');
        Route::post('rfc-fisico', 'RegistroController@rfcFisico')->name('rfc.fisico');

        /*---------Rutas para los selects dinámicos-------------*/
        Route::get('municipios/{id}', 'RegistroController@getMunicipios')->name('get.municipios');
        Route::get('localidades/{id}', 'RegistroController@getLocalidades')->name('get.localidades');
        Route::get('colonias/{cp}', 'RegistroController@getColonias')->name('get.colonias');
        Route::get('colonias2/{id}', 'RegistroController@getColonias2')->name('get.colonias2');
        Route::get('codigos/{id}', 'RegistroController@getCodigos')->name('get.codigos');
        Route::get('codigos2/{id}', 'RegistroController@getCodigos2')->name('get.codigos2');
        Route::get('submarcas/{id}', 'RegistroController@getSubmarcas')->name('get.submarcas');
        Route::get('tipoVehiculos/{id}', 'RegistroController@getTipoVehiculos')->name('get.tipovehiculos');
        Route::get('armas/{id}', 'RegistroController@getArmas')->name('get.armas');
        /*Route::get('denunciantes/{idCarpeta}', 'RegistroController@getDenunciantes');
        Route::get('denunciados/{idCarpeta}', 'RegistroController@getDenunciados');*/
        Route::get('involucrados/{idCarpeta}/{idAbogado}', 'RegistroController@getInvolucrados')->name('get.involucrados');
        Route::get('involucrados/{idCarpeta}/{idAbogado}', 'RegistroController@getInvolucrados2')->name('get.involucrados2');
        Route::get('agrupaciones1/{id}', 'RegistroController@getAgrupaciones1')->name('get.agrupaciones1');
        Route::get('agrupaciones2/{id}', 'RegistroController@getAgrupaciones2')->name('get.agrupaciones2');
        Route::get('persona/curp/{curp}', 'RegistroController@buscarCURP')->name('persona.curp');
        Route::get('persona/curp/{curp}/{id}/edit', 'RegistroController@buscarCURPEdit')->name('comprobarEditar.curp');

        /*---------Rutas para NOTALLLOWED ------------*/
        Route::get('/notAllowed', function () {
            return view('forms.notAllowed');
        })->name('notAllowed');
    });
    Route::get('contador', 'RegistroController@contador');
});

/*
Route::get('/registrar-carpeta', function () {
return view('registro');
})->middleware('auth');

Route::middleware(['auth'])->group(function () {
Route::get('/', function () {
return view('auth.login');
});

Route::get('articles/{id}/destroy',[
'uses' => 'ArticlesController@destroy',
'as' => 'articles.destroy'
]);
Route::get('/', 'RegistroController@index')->name('registro');
});
 */

/*
Route::get('/registrar-carpeta', 'RegistroController@showRegisterForm')->name('registro')->middleware('auth');
Route::post('storecarpeta', 'RegistroController@storeCarpeta')->name('store.carpeta');
Route::post('storedenunciante', 'RegistroController@storeDenunciante')->name('store.denunciante');
Route::post('storedenunciado', 'RegistroController@storeDenunciado')->name('store.denunciado');
Route::post('storeautoridad', 'RegistroController@storeAutoridad')->name('store.autoridad');
Route::post('storeabogado', 'RegistroController@storeAbogado')->name('store.abogado');
Route::post('storefamiliar', 'RegistroController@storeFamiliar')->name('store.familiar');
Route::post('storedelito', 'RegistroController@storeDelito')->name('store.delito');
Route::post('storevehiculo', 'RegistroController@storeVehiculo')->name('store.vehiculo');
Route::post('storeacusacion', 'RegistroController@storeAcusacion')->name('store.acusacion');
 */
