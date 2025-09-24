<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ControllerAuth extends Controller
{
    // Controlador para dirigir a la vista de registro
    public function showRegistration()
    {
        return view('auth.register');
    }
    // Controlador para dirigir a la vista de login
    public function showLogin()
    {
        return view('auth.login');
    }

    // Controlador para registrar un nuevo usuario
    public function register(Request $request)
    {
        try{
            $validation = $request->validate([
                'name' => 'required|string|min:3',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:6|confirmed'
            ]);
            // Creamos al usuario
            $user = User::create([
                'name' => $validation['name'],
                'email' => $validation['email'],
                'password' => $validation['password']
            ]);
            if($user){
                return redirect()->route('login.form');
            }
        }
        catch(\Exception $e){
            return redirect()->back()->withErrors(['error' => 'Error al registrar el usuario: '.$e->getMessage()])->withInput();
        }
    }

    // Controlador para loguear un usuario
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        else{
            return redirect()->route('auth.login');
        }
    }
}
