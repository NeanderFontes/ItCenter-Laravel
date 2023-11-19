<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Rota principal para welcome.blade.php
    public function index() {
        return view('welcome');
    }

    // Rota Web home da view welcome.blade.php
    public function create() {
        return view('welcome');
    }
}
