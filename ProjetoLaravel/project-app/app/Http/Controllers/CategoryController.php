<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Rota principal para category.blade.php
    public function index() {

        // Categoria da tabela de banco de dados srbatata
        $categorias = Categoria::all();


        return view('categorias.category', compact(
            'categorias',
        ));
    }
}
