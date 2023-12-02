<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // Rota principal para product.blade.php
    public function index() {

        // Categoria da tabela de banco de dados srbatata
        $produtos = Produto::all();
        //dd($produtos);


        return view('produtos.product', compact(
            'produtos',
        ));
    }

    public function indexProduto($id) {

        $produtos = Produto::where('idCategory', $id)->get();

        return view('produtos.product', compact(
            'produtos',
        ));
    }

    public function produtoDelete($id) {

        Produto::where('id', $id)->delete();

        return back();
    }


    public function produtoUpdate($id) {


        $produtoAtual = Produto::where('id', $id)->first();

        return view('produtos.product_view', compact(
            'produtoAtual',
        ));
    }

    public function produtoStore(Request $request) {

        Produto::where('id', $request->id)->update([
                'nameProducts' => $request->name,
                'price' => $request->price,
            ]);
        return redirec()->route('produtos.product_view');
    }

    // public function createProduct(Request $request) {

    //     return view('produtos.product_create', compact(
    //         'produtoAtual',
    //     ));
    // }

    public function createProduto() {

        return view('produtos.product_create');
    }

    public function store(Request $request) {

        Produtos::insert([
            'nameProducts' => $request->nameProducts,
            'price' => $request->price,
        ]);


        return redirect()->route('produtos.product');
    }
}
