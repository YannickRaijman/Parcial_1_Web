<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])
    ->name('home');

Route::get('/servicios', [\App\Http\Controllers\ServiceController::class, 'index'])
    ->name('services.index');

Route::get('/blog', [\App\Http\Controllers\ArticleController::class, 'index'])
    ->name('blog.index');

Route::get('/servicios/nuevo', [\App\Http\Controllers\ServiceController::class, 'create'])
    ->middleware('auth')
    ->name('services.create');

Route::post('/servicios/nuevo', [\App\Http\Controllers\ServiceController::class, 'store'])
    ->middleware('auth')
    ->name('services.store');

Route::get('iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'login'])
    ->name('auth.login');

Route::post('iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'authenticate'])
    ->name('auth.authenticate');

Route::post('cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'logout'])
    ->name('auth.logout');

Route::get('/servicios/{id}/editar', [\App\Http\Controllers\ServiceController::class, 'edit'])
    ->middleware('auth')
    ->name('services.edit')
    ->whereNumber('id');

Route::put('/servicios/{id}/editar', [\App\Http\Controllers\ServiceController::class, 'update'])
    ->middleware('auth')
    ->name('services.update')
    ->whereNumber('id');

Route::get('/servicios/{id}/eliminar', [\App\Http\Controllers\ServiceController::class, 'delete'])
    ->middleware('auth')
    ->name('services.delete')
    ->whereNumber('id');

Route::delete('/servicios/{id}/eliminar', [\App\Http\Controllers\ServiceController::class, 'destroy'])
    ->middleware('auth')
    ->name('services.destroy')
    ->whereNumber('id');
