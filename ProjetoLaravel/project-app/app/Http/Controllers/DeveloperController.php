<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    // Rota Principal da App "developer.blade.php"
    public function index() {

        // Atribuição de Array:
        $arr = ["Neander", "Rebeca", "Adinalvo","Doreia", "Igor", "Hugo"];
        // dd($arr);

        // Atribuição de variável em Laravel
        $nome = "Neander Fontes";
        $idade = "34";
        $profissao = "Desenvolvedor";
        $cidade = "Braga";
        // dd($nome);

        // Return da declaração dos dados para a view "desenvolvedor.blade.php"
        return view('desenvolvedor.developer', [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => $profissao,
            'cidade' => $cidade,
            'arr' => $arr,
        ]);
    }
}
