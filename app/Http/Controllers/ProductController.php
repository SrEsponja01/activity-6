<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Método para mostrar tu vista principal (index.blade.php)
    public function index()
    {
        return view('products.index');
    }

    // Método para mostrar tu vista de creación (create.blade.php)
    public function create()
    {
        return view('products.create');
    }

    // Método para mostrar tu vista de edición (edit.blade.php)
    public function edit($id)
    {
        return view('products.edit');
    }
}