<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/clientes',App\Http\Controllers\ClienteController::class);
Route::resource('/pets',App\Http\Controllers\PetController::class);
Route::resource('/funcionarios',App\Http\Controllers\FuncionarioController::class);
Route::get('/clientes/{cliente}/pets', [App\Http\Controllers\PetController::class, 'petsPorCliente']);