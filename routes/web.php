<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('productos', function () {
    return "Estoy en la pagina de producto";
});
Route::get('productos/create', function () {
    return "Aqui va a estar el formulario de la creacion de productos";
});
Route::get('productos/{id}', function ($id) {
    return "El nombre del producto es $id";
});
Route::get('productos/{id}/{categoria}', function ($id,$categoria) {
    return "El nombre del producto es $id y la categoria $categoria";
});
