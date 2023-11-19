<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Rota principal para product.blade.php
    public function index($id) {
        return view('produtos.product', compact(
            'id',
        ));
    }

    // Rota principal para return view product.blade.php
    public function create() {
        return view('produtos.product');
    }
}
