<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\AlumnoController;

Route::get('/', function () {
    return view('welcome');
});

#Route::resource('persona', PersonaController::class);

Route::resource('photos', PhotoController::class);

Route::get('/persona/{id}', [PersonaController::class, 'show']);

Route::resource('alumnos', AlumnoController::class);