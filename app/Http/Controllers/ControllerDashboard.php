<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeWorks;
use Illuminate\Support\Facades\Auth;

class ControllerDashboard extends Controller
{
    public function __invoke()
    {
      // Obtengo al usuario autenticado
      $user = Auth::user();
      // Obtengo todas las tareas del usuario
      if(!$user) $pendingTasks = [];
      else $pendingTasks = HomeWorks::where('user_id', $user->id)
                        ->where('status', false)
                        ->orderBy('final_date', 'asc')
                        ->get();
      // Obtengo todas las tareas de usuario
      if(!$user) $allTasks = [];
      else $allTasks = HomeWorks::where('user_id', $user->id)
                        ->orderBy('final_date', 'asc')
                        ->get();
      // Retorno la vista del dashboard con las tareas pendientes y todas las tareas
      return view('admin.dashboard', compact('pendingTasks', 'allTasks'));

    }
}
