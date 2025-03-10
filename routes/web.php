<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí puedes registrar las rutas web para tu aplicación. Estas rutas son
| cargadas por el RouteServiceProvider y todas estarán asignadas al grupo
| de middleware "web". ¡Haz algo grandioso!
|
*/

// Ruta para la página principal (Home)
Route::get('/', function () {
    return view('home');  // Vista home.blade.php
});

// Ruta para la página de proyectos
Route::get('/proyectos', function () {
    return view('projects.index');  // Vista projects/index.blade.php
});

// Ruta para la página de contacto
Route::get('/contacto', function () {
    return view('contact');  // Vista contact.blade.php
});
