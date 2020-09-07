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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function(){
    echo "<a href='" . route("contacto") . "'>Contacto 1</a><br>";
    echo "<a href='" . route("contacto") . "'>Contacto 2</a><br>";
    echo "<a href='" . route("contacto") . "'>Contacto 3</a><br>";
    echo "<a href='" . route("contacto") . "'>Contacto 4</a><br>";
    echo "<a href='" . route("contacto") . "'>Contacto 5</a><br>";
});

Route::get('contactame', function(){
    return "Sección de Contacto";
})->name("contacto");

Route::get('saludo/{nombre?}', function($nombre = "Anonimo"){
    return "Saludos, " . $nombre;
});

*/

Route::view("/operaciones", "operaciones")->name("operaciones");
Route::get("/", "InicioController@index")->name("inicio");
Route::post("operaciones", "MensajeController@store");
