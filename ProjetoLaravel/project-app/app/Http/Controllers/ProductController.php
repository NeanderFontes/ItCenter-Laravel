<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Rota principal para product.blade.php
    public function index() {


        // todo - criar variável da acessar a tabela de produtos da base de dados
        

        return view('produtos.product');
    }
}
