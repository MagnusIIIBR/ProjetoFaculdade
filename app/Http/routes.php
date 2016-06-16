<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/', 'PagesController@index');
Route::get('Cliente', 'ClienteController@index');
Route::get('Cliente', 'ClienteController@editar');

Route::get('Cargo', 'CargoController@index');
Route::get('Cargo', 'CargoController@editar');

Route::get('Dashboard', 'DashboardController@index');
Route::get('Dashboard', 'DashboardController@editar');

Route::get('Estoque', 'EstoqueController@index');
Route::get('Estoque', 'EstoqueController@editar');

Route::get('Fornecedor', 'FornecedorController@index');
Route::get('Fornecedor', 'FornecedorController@editar');

Route::get('Funcionario', 'FuncionarioController@index');
Route::get('Funcionario', 'FuncionarioController@editar');

Route::get('Login', 'LoginController@index');
Route::get('Login', 'LoginController@editar');

Route::get('Marca', 'MarcaController@index');
Route::get('Marca', 'MarcaController@editar');

Route::get('Produto', 'ProdutoController@index');
Route::get('Produto', 'ProdutoController@editar');

Route::get('TipoCalcado', 'TipoCalcadoController@index');
Route::get('TipoCalcado', 'TipoCalcadoController@editar');

Route::get('Venda', 'VendaController@index');
Route::get('Venda', 'VendaController@editar');
