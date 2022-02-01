<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;



Route::get('/', function () {
    return view('principal');
});

// ruta para leer
Route::post('leer',[UsuarioController::class, 'leerController']);

// ruta para insertar
Route::post('crear',[UsuarioController::class, 'crearController']);

//ruta de eliminar

Route::delete('eliminar',[UsuarioController::class, 'eliminarController']);

// ruta para insertar
Route::put('editar',[UsuarioController::class, 'editarController']);