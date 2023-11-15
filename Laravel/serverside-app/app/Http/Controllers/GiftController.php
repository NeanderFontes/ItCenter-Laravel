<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gift;

class GiftController extends Controller
{
    public function index() {
        $gifts = Gift::get();
        return view('gifts.index', compact('gifts'));
    }

    public function create() {
        return view('gifts.create');
    }

    public function store(Request $request) {
        // Lógica para armazenar gifts no banco de dados
        // Certifique-se de validar os dados antes de salvar

        return redirect()->route('gifts.index')->with('success', 'Gift adicionado com sucesso!');
    }

    public function edit($id) {
        $gift = Gift::find($id);
        return view('gifts.edit', compact('gift'));
    }

    public function update(Request $request, $id) {
        // Lógica para atualizar gifts no banco de dados
        // Certifique-se de validar os dados antes de atualizar

        return redirect()->route('gifts.index')->with('success', 'Gift atualizado com sucesso!');
    }
}
