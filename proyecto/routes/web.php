<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])
    ->name('home');

Route::get('/servicios', [\App\Http\Controllers\ServiceController::class, 'index'])
    ->name('services.index');

Route::get('/blog', [\App\Http\Controllers\ArticleController::class, 'index'])
    ->name('blog.index');