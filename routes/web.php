<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome');});

// Rutas para el Auth
require __DIR__.'/auth.php';
