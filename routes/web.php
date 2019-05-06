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

// Rotas para operações de produtos
Route::get("/produtos/formulario", "ProdutoController@formulario");
Route::get("/produtos", "ProdutoController@listagem");
Route::post("/produtos/gravar", "ProdutoController@gravar");
Route::get("/produtos/deletar/{id}", "ProdutoController@deletar");
Route::get("/produtos/alterar/formulario/{id}", "ProdutoController@formularioAlterar");
Route::post("/produtos/alterar/{id}", "ProdutoController@alterar");

// Rotas para operações de clientes
Route::get("/pessoas/formulario", "PessoaController@formulario");
Route::get("/pessoas", "PessoaController@listagem");
Route::post("/pessoas/gravar", "PessoaController@gravar");
Route::get("/pessoas/deletar/{id}", "PessoaController@deletar");
Route::get("/pessoas/alterar/formulario/{id}", "PessoaController@formularioAlterar");
Route::post("/pessoas/alterar/{id}", "PessoaController@alterar");

// Rotas para operações de regiao
Route::get("/regiao/formulario", "RegiaoController@formulario");
Route::get("/regiao", "RegiaoController@listagem");
Route::post("/regiao/gravar", "RegiaoController@gravar");
Route::get("/regiao/deletar/{id}", "RegiaoController@deletar");
Route::get("/regiao/alterar/formulario/{id}", "RegiaoController@formularioAlterar");
Route::post("/regiao/alterar/{id}", "RegiaoController@alterar");

// Rotas para controle de transportadoras
Route::get("/transportadoras/formulario", "TransportadoraController@formulario");
Route::get("/transportadoras", "TransportadoraController@listagem");
Route::post("/transportadoras/gravar", "TransportadoraController@gravar");
Route::get("/transportadoras/deletar/{id}", "TransportadoraController@deletar");
Route::get("/transportadoras/alterar/formulario/{id}", "TransportadoraController@formularioAlterar");
Route::post("/transportadoras/alterar/{id}", "TransportadoraController@alterar");

// Rotas para controle de forncedores
Route::get("/fornecedores/formulario", "FornecedoresController@formulario");
Route::get("/fornecedores", "FornecedoresController@listagem");
Route::post("/fornecedores/gravar", "FornecedoresController@gravar");
Route::get("/fornecedores/deletar/{id}", "FornecedoresController@deletar");
Route::get("/fornecedores/alterar/formulario/{id}", "FornecedoresController@formularioAlterar");
Route::post("/fornecedores/alterar/{id}", "FornecedoresController@alterar");