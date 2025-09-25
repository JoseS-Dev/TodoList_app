<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerCategoryWork;

// Rutas para las categorias de tareas
Route::middleware('auth')
    ->get('/category', [ControllerCategoryWork::class, 'index'])
    ->name('category.index');

Route::middleware('auth')
    ->get('category/create', [ControllerCategoryWork::class, 'create'])
    ->name('category.create');