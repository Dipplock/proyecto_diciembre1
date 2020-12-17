<?php

use Illuminate\Support\Facades\Route;


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
})->name('index');

Route::get('pedido', function () {
    return view('agregar_ventas');
})->name('pedido');


Route::get("productos", "ProductoController@show")->name('showProductos');

Route::get("clientes", "ClienteController@show")->name('showClientes');

Route::post("ventas/agregar", "PedidoController@create")->name('siestadefinida');

Route::get("pedido/alta", "PedidoController@mostrarPedido");

Route::post("pedido/agregar", "PedidoController@alta")->name("alta");

