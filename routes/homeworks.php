<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerHomeWorks;

// Rutas para la gestión de tareas
Route::middleware('auth')->get('/homeworks', [ControllerHomeWorks::class, 'index'])
    ->name('homeworks');
Route::middleware('auth')->get('/homeworks/create', [ControllerHomeWorks::class, 'create'])
    ->name('homeworks.create');
Route::middleware('auth')->post('/homeworks/store', [ControllerHomeWorks::class, 'store'])
    ->name('homeworks.store');
