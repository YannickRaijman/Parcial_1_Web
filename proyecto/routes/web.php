<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\HomeController::class, 'home'])
    ->name('home');

Route::get('/quienes-somos', function(){
    return view('about');
})->name('about');

Route::get('peliculas/listado', [\App\Http\Controllers\MoviesController::class, 'index'])
    ->name('movies.index');

Route::get('peliculas/{id}', [\App\Http\Controllers\MoviesController::class, 'view'])
    ->name('movies.view')
    ->whereNumber('id');

Route::get('peliculas/publicar', [\App\Http\Controllers\MoviesController::class, 'create'])
    ->middleware('auth')
    ->name('movies.create');

Route::post('peliculas/publicar', [\App\Http\Controllers\MoviesController::class, 'store'])
    ->middleware('auth')
    ->name('movies.store');

Route::get('peliculas/{id}/eliminar', [\App\Http\Controllers\MoviesController::class, 'delete'])
    ->middleware('auth')
    ->name('movies.delete')
    ->whereNumber('id');

Route::delete('peliculas/{id}/eliminar', [\App\Http\Controllers\MoviesController::class, 'destroy'])
    ->middleware('auth')
    ->name('movies.destroy')
    ->whereNumber('id');

Route::get('peliculas/editar/{id}', [\App\Http\Controllers\MoviesController::class, 'edit'])
    ->middleware('auth')
    ->name('movies.edit')
    ->whereNumber('id');

Route::put('peliculas/editar/{id}', [\App\Http\Controllers\MoviesController::class, 'update'])
    ->middleware('auth')
    ->name('movies.update')
    ->whereNumber('id');

Route::get('iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'login'])
    ->name('auth.login');

Route::post('iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'authenticate'])
    ->name('auth.authenticate');

Route::post('cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'logout'])
    ->name('auth.logout');
