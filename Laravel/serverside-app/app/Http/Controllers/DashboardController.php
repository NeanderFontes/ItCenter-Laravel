<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Arquivo: "Pasta - backoffice| Arquivi - home.blade.php"
    public function index() {
        return view('backoffice.home');
    }
}
