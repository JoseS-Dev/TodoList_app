<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerDashboard;


Route::get('/', function () { return view('welcome');});

Route::middleware('auth')->get('/dashboard', ControllerDashboard::class)
    ->name('dashboard');

// Rutas para el Auth
require __DIR__.'/auth.php';
// Rutas para las tareas
require __DIR__.'/homeworks.php';
