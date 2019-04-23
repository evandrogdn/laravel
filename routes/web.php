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

Route::get('/produtos', function () {
    return view('produtos');
});
Route::get('/todosFuncionario', function () {
    return view('Funcionario');
});
Route::group(["prefix" => "transportadora"], function () {
    Route::get('', function () {
        return view('transportadora-lista');
    });
});
Route::get('/consultaCliente', function () {
    return view('ViewPadrao');
});
Route::get('/consultaCliente', function () {
    return view('ViewConsultaClientesTeste');
});
Route::get('/cadastroCliente', function () {
    return view('ViewManutencaoCliente');
});
Route::get('/consultaprodutos', function () {
    return view('produtos');
});
Route::get('/produtos', function () {
    return view('ViewProdutos');
});