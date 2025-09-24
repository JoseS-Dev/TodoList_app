<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAuth;


// GETS
Route::get('/register', [ControllerAuth::class, 'showRegistration'])->name('register.form');
Route::get('/login', [ControllerAuth::class, 'showLogin'])->name('login.form');

// POSTS
// Ruta para registrar un nuevo usuario
Route::post('/create-user', [ControllerAuth::class, 'register'])->name('register.create');

// Ruta para loguear un usuario
Route::middleware('guest')
    ->post('/login-user',[ControllerAuth::class, 'login'])->name('login.session');