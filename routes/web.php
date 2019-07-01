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

Route::resources([
    'anyData2'  => 'DatatablesController',
    'getIndex' => 'DatatablesController'
]);
// basico inicial
Route::get('foo', 'DatatablesController@getIndex');

Route::get('foo2', 'DatatablesController@anyData') ->name('datatables.data');

// mestre detalhe 
Route::any('/', 'EquipamentoController@index');
Route::get('dadosdoequipamento', 'EquipamentoController@getMasterdata') -> name('equipamento.dadosmestre');

//Route::any('/', 'DatatablesController@getMaster');
Route::any('masterdata', 'DatatablesController@getMasterData') ->name('datatables.dadosmestre');
Route::any('detalhe/{id}', 'DatatablesController@getDetailsData');
Route::any('detalhehistorico/{id}', 'HistoricoController@getDetailsData');

//Route::any('master/equipamento/create', 'EquipamentoController@create');
Route::post('equipamento/{id}/update', 'EquipamentoController@update');
Route::resource('equipamento', 'EquipamentoController');
Route::resource('historico', 'HistoricoController');




