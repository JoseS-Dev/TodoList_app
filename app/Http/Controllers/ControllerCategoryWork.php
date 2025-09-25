<?php

namespace App\Http\Controllers;

use App\Models\CategoryWork;
use Illuminate\Http\Request;

class ControllerCategoryWork extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = CategoryWork::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create-category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryWork $categoryWork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryWork $categoryWork)
    {
        return view('admin.category.edit-category', compact('categoryWork'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoryWork $categoryWork)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryWork $categoryWork)
    {
        CategoryWork::destroy($categoryWork->id);
        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Categoría eliminada',
            'text' => 'La categoría ha sido eliminada con éxito'
        ]);
        return redirect()->route('category.index');
    }
}
