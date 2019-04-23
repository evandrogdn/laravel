<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(["prefix" => "transportadora"], function () {
    Route::get('', 'TransportadoraController@getTransportadoras');
    Route::get('{id}', 'TransportadoraController@getTransportadora');
    Route::post('', 'TransportadoraController@addTransportadora');
    Route::put('{id}', 'TransportadoraController@atualizaTransportadora');
    Route::delete('{id}', 'TransportadoraController@deletaTransportadora');
});

Route::group(['prefix' => 'produto'], function () {
    Route::get('', 'ProdutoController@todosProdutos');
    Route::get('{id}', 'ProdutoController@getProduto');
    Route::post('', 'ProdutoController@salvarProduto');
    Route::put('{id}', 'ProdutoController@atualizarProduto');
    Route::delete('{id}', 'ProdutoController@deletarProduto');
});

Route::group(['prefix' => 'clientes'], function () {
    Route::get('', 'ClientesController@getAllClientes');
    Route::get('{id}', 'ClientesController@getCliente');
    Route::post('', 'ClientesController@saveCliente');
    Route::put('{id}', 'ClientesController@updateCLiente');
    Route::delete('{id}', 'ClientesController@deleteCliente');
});