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
	Route::get('/iniciar-carpeta', 'CarpetaController@showForm')->name('inicio');
	Route::post('storecarpeta', 'CarpetaController@storeCarpeta')->name('store.carpeta');
	Route::get('/carpeta-inicial/{id}', 'CarpetaController@index')->name('carpeta');

	Route::get('carpeta/{idCarpeta}/agregar-denunciante', 'DenuncianteController@showForm')->name('new.denunciante');
	Route::post('storedenunciante', 'DenuncianteController@storeDenunciante')->name('store.denunciante');

	Route::get('carpeta/{idCarpeta}/agregar-denunciado', 'DenunciadoController@showForm')->name('new.denunciado');
	Route::post('storedenunciado', 'DenunciadoController@storeDenunciado')->name('store.denunciado');

	Route::get('carpeta/{idCarpeta}/agregar-abogado', 'AbogadoController@showForm')->name('new.abogado');
	Route::post('storeabogado', 'AbogadoController@storeAbogado')->name('store.abogado');

	Route::get('carpeta/{idCarpeta}/agregar-defensa', 'AbogadoController@showForm2')->name('new.defensa');
	Route::post('storedefensa', 'AbogadoController@storeDefensa')->name('store.defensa');

	Route::get('carpeta/{idCarpeta}/agregar-autoridad', 'AutoridadController@showForm')->name('new.autoridad');
	Route::post('storeautoridad', 'AutoridadController@storeAutoridad')->name('store.autoridad');

	Route::get('carpeta/{idCarpeta}/agregar-familiar', 'FamiliarController@showForm')->name('new.familiar');
	Route::post('storefamiliar', 'FamiliarController@storeFamiliar')->name('store.familiar');

	Route::get('carpeta/{idCarpeta}/agregar-delito', 'DelitoController@showForm')->name('new.delito');
	Route::post('storedelito', 'DelitoController@storeDelito')->name('store.delito');

	Route::get('carpeta/{idCarpeta}/agregar-acusacion', 'AcusacionController@showForm')->name('new.acusacion');
	Route::post('storeacusacion', 'AcusacionController@storeAcusacion')->name('store.acusacion');

	Route::get('carpeta/{idCarpeta}/agregar-vehiculo', 'VehiculoController@showForm')->name('new.vehiculo');
	Route::post('storevehiculo', 'VehiculoController@storeVehiculo')->name('store.vehiculo');

	Route::get('carpeta/{idCarpeta}/generar-colaboracion-pm', 'ColaboracionController@showForm')->name('new.colaboracionpm');
	Route::get('carpeta/{idCarpeta}/generar-colaboracion-sp', 'ColaboracionController@showForm2')->name('new.colaboracionsp');

	Route::get('carpeta/{id}', [
		'uses' => 'CarpetaController@verDetalle',
		'as' => 'view.carpeta'
	]);

	Route::get('carpeta/{idCarpeta}/denunciante/{idDenunciante}/complemento', 'DenuncianteController@showComplement')->name('complement.denunciante');

	Route::post('denunciante/storecomplemento', 'DenuncianteController@storeComplement')->name('store.complement1');

	Route::get('carpeta/{idCarpeta}/denunciado/{idDenunciado}/complemento', 'DenunciadoController@showComplement')->name('complement.denunciado');

	Route::post('denunciado/storecomplemento', 'DenunciadoController@storeComplement')->name('store.complement2');


	Route::post('armarRfc', 'DenuncianteController@rfcMoral')->name('rfc.denunciante');
	Route::post('armarRfcFIsico', 'DenuncianteController@rfcFisico')->name('rfcFisico.denunciante');

	/*---------Rutas para los selects dinámicos-------------*/
	Route::get('carpeta/municipios/{id}', 'RegistroController@getMunicipios');
	Route::get('carpeta/localidades/{id}', 'RegistroController@getLocalidades');
	Route::get('carpeta/colonias/{cp}', 'RegistroController@getColonias');
	Route::get('carpeta/colonias2/{id}', 'RegistroController@getColonias2');
	Route::get('carpeta/codigos/{id}', 'RegistroController@getCodigos');
	Route::get('carpeta/codigos2/{id}', 'RegistroController@getCodigos2');
	Route::get('carpeta/submarcas/{id}', 'RegistroController@getSubmarcas');
	Route::get('carpeta/tipoVehiculos/{id}', 'RegistroController@getTipoVehiculos');
	Route::get('carpeta/armas/{id}', 'RegistroController@getArmas');
	/*Route::get('denunciantes/{idCarpeta}', 'RegistroController@getDenunciantes');
	Route::get('denunciados/{idCarpeta}', 'RegistroController@getDenunciados');*/
	Route::get('carpeta/involucrados/{idCarpeta}/{idAbogado}', 'RegistroController@getInvolucrados');
  	Route::get('carpeta/agrupaciones1/{id}','RegistroController@getAgrupaciones1');
  	Route::get('carpeta/agrupaciones2/{id}','RegistroController@getAgrupaciones2');
    Route::get('persona/curp/{curp}','RegistroController@buscarCURP');
    Route::get('contador','RegistroController@contador');

	/*---------Rutas para generación de documentos-------------*/
	Route::get('constancia-hechos/{idDenunciante}', [
		'as'=>'constancia.hechos',
		'uses'=>'DocxMakerController@getConstanciaHechos'
	]);
	Route::get('formato-denuncia/{idAcusacion}', [
		'as'=>'formato.denuncia',
		'uses'=>'DocxMakerController@getFormatoDenuncia'
	]);
	Route::post('colaboracion-pm', [
		'as'=>'colaboracion.pm',
		'uses'=>'DocxMakerController@getFormatoColaboracionPm'
	]);
	Route::post('colaboracion-sp', [
		'as'=>'colaboracion.sp',
		'uses'=>'DocxMakerController@getFormatoColaboracionSp'
	]);

	/*---------Rutas para el libro de gobierno-------------*/
	Route::get('libro-gobierno', 'LibroGobiernoController@index')->name('libro.gobierno');
	Route::get('api/libro', 'LibroGobiernoController@apiLibro')->name('api.libro');
	Route::get('api/rango', 'LibroGobiernoController@apiLibroRango')->name('api.rango');

	/*---------Rutas para la bitácora-------------*/
	Route::get('bitacora', 'BitacoraController@index')->name('bitacora');
	Route::get('api/bitacora', 'BitacoraController@apiBitacora')->name('api.bitacora');


  	/*---------Rutas para NOTALLLOWED ------------*/
  	Route::get('/notAllowed',function(){
        return view('forms.notAllowed');
  	})->name('notAllowed');


    /*-------------- RUTA PARA NARRACIONES---------------------*/
    Route::get('narracion/{id}/ver','NarracionController@ver')->name('ver.narracion');
    Route::get('narracion/{idCarpeta}/{idInvolucrado}/{tipoInvolucrado}', 'NarracionController@index')->name('narracion.index');
    Route::post('narracion/create', 'NarracionController@store')->name('store.narracion');

  /*-------------- RUTA PARA CITATORIOS---------------------*/
     Route::get('citatorio/{idAcusacion}', 'CitatorioController@index')->name('citatorio');
    Route::post('citatorio/create', 'CitatorioController@store')->name('store.citatorio');
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
