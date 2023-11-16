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

        return redirect()->route('gifts.index')->with('success', 'Gift adicionado com sucesso!');
    }

    public function edit($id) {
        $gift = Gift::find($id);
        return view('gifts.edit', compact('gift'));
    }

    public function update(Request $request, $id) {

        return redirect()->route('gifts.index')->with('success', 'Gift atualizado com sucesso!');
    }
}
