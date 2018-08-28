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

Route::get('/clientt', function () {
    return view('plantilla');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//Llenar registros con Models Factory

Route::get('/create_client', function() {
    $clientss=factory(App\Models\Client::class,7)->create();
    return $clientss;
});

Route::get('/create_user', function() {
    $userss=factory(App\User::class,7)->create();
    return $userss;
});

Route::get('/create_compra', function() {
    $comprass=factory(App\Models\Compra::class,2)->create();
    return $comprass;
});


//palabras->(client, compra, user) se mostraran en la pag web

Route::resource('client', 'ClientController');

Route::resource('compra', 'CompraController');

Route::resource('user', 'UserController');



//Cliente PDF
//VER
Route::get ('ver_cliente', [
    'as' => 'ver_cliente',
    'uses'=>'ClientController@verpdf'
    ]);

Route::get ('ver_client_id/{id}', [
    'as' => 'ver_client_id',
    'uses'=>'ClientController@verpdfid'
    ]);

//Descargar
Route::get ('descargar_cliente', [
    'as' => 'descargar_cliente',
    'uses'=>'ClientController@descargarpdf'
    ]);

Route::get ('descargar_client_id/{id}', [
    'as' => 'descargar_client_id',
    'uses'=>'ClientController@descargarpdfid'
    ]);


//Compra PDF
//VER
Route::get ('ver_compra', [
    'as' => 'ver_compra',
    'uses'=>'CompraController@verpdf'
    ]);

Route::get ('ver_compra_id/{id}', [
    'as' => 'ver_compra_id',
    'uses'=>'CompraController@verpdfid'
    ]);

//Descargar
Route::get ('descargar_compra', [
    'as' => 'descargar_compra',
    'uses'=>'CompraController@descargarpdf'
    ]);

Route::get ('descargar_compra_id/{id}', [
    'as' => 'descargar_compra_id',
    'uses'=>'CompraController@descargarpdfid'
    ]);



Route::get('grafic',[
'as'=> 'grafic',
'uses'=> 'CompraController@charts'
]);


//Consultas

Route::get('/consulta1', 'CompraController@consulta1')->name('consulta1');

Route::get('/consulta2', 'CompraController@consulta2')->name('consulta2');

Route::get('/consulta3', 'CompraController@consulta3')->name('consulta3');

Route::get('/consulta4', 'CompraController@consulta4')->name('consulta4');

Route::get('/consulta5', 'CompraController@consulta5')->name('consulta5');

Route::get('/consulta6', 'CompraController@consulta6')->name('consulta6');

Route::get('/consulta7', 'CompraController@consulta7')->name('consulta7');

Route::get('/consulta8', 'CompraController@consulta8')->name('consulta8');

Route::get('/consulta9', 'CompraController@consulta9')->name('consulta9');