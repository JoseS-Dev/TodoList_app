<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome');});

Route::middleware('auth')
    ->get('/dashboard', function () { return view('admin.dashboard');})
    ->name('dashboard');

// Rutas para el Auth
require __DIR__.'/auth.php';
// Rutas para el manejo de categorias
require __DIR__.'/categoryWorks.php';
