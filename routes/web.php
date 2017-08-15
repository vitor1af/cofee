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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cadastro/{atributo}', 'Cadastro_Controller@index')->name('cadastro');
Route::get('/cadastro/usuario/{convidar}', 'Cadastro_Controller@novo_usuario')->name('novo_usuario');
Route::get('/cadastro/usuario/{cadastrar}', 'Cadastro_Controller@novo_usuario')->name('novo_usuario');
Route::get('/cadastro/usuario/{id}/update', 'Cadastro_Controller@update_usuario')->name('update_usuario');
Route::get('/cadastro/usuario/{id}/delete', 'Cadastro_Controller@delete_usuario')->name('delete_usuario');

Route::post('/cadastro/usuario/convidar', 'Cadastro_Controller@enviar_convite')->name('convite');
Route::post('/cadastro/usuario/cadastrar', 'Cadastro_Controller@create_usuario')->name('cadastro_usuario');
Route::post('/cadastro/usuario/{id}/salvar', 'Cadastro_Controller@save_usuario')->name('update_usuario');

//FORNECEDOR
Route::get('/cadastro/fornecedor/pessoa', 'Cadastro_Controller@fornecedor_pessoa')->name('fornecedor_pessoa');
Route::post('/cadastro/fornecedor/pessoa/novo', 'Cadastro_Controller@fornecedor_pessoa_novo')->name('fornecedor_pessoa_novo');
Route::post('/cadastro/fornecedor/pessoa/cadastrar', 'Cadastro_Controller@fornecedor_pessoa_novo_save')->name('fornecedor_pessoa_novo_save');