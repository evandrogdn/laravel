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