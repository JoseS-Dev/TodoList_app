<?php

namespace App\Http\Controllers;

use App\Models\HomeWorks;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerHomeWorks extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtengo todas las tareas de un usuario
        $homeworks = HomeWorks::where('user_id', Auth::id())->get();
        // Obtengo todas las tareas que ha sido completadas por el usuario
        $homeworksFinished = HomeWorks::where('user_id', Auth::id())
        ->where('status', true)->orderBy('final_date', 'asc')->get();
        return view('admin.homeworks.index', compact('homeworks', 'homeworksFinished'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.homeworks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'title_work' => 'required|string|max:255',
            'description_work' => 'required|string',
            'final_date' => 'required|date|after_or_equal:initial_date',
        ]);
        // Se crea la nota
        HomeWorks::create([
            'title_work' => $validation['title_work'],
            'description_work' => $validation['description_work'],
            'initial_date' => now(),
            'final_date' => $validation['final_date'],
            'user_id' => Auth::id()
        ]);
        return redirect()->route('homeworks');
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeWorks $homeWorks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeWorks $homeWorks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomeWorks $homeWorks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeWorks $homeWorks)
    {
        //
    }
}
