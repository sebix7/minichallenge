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

Route::get("/operacion", "OperacionController@create")->name("operacion.create");
Route::post("/operacion", "OperacionController@store")->name("operacion.store");
Route::get("/", "InicioController@index")->name("inicio");
Route::get("/operacion/listar", "OperacionController@index")->name("operacion.index");
Route::get("/operacion/{id}/editar", "OperacionController@show")->name("operacion.show");
Route::patch("/operacion/{id}/editar", "OperacionController@update")->name("operacion.update");

