<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeveloperController extends Controller
{

    protected function getContacts() {
        // Atribuição de Array em uma função
        $contacts = [
            ['id' => 2 , 'nome' => "Rebeca", 'cidade' => "Braga"],
            ['id' => 3 , 'nome' => "Doreia", 'cidade' => "Salvador"],
            ['id' => 4 , 'nome' => "Adinalvo", 'cidade' => "Salvador"],
            ['id' => 5 , 'nome' => "Igor", 'cidade' => "Salvador"],
            ['id' => 6 , 'nome' => "Hugo", 'cidade' => "Salvador"],
        ];

        return $contacts;
    }
    // Rota Principal da App "developer.blade.php"
    public function index() {
        // Atribuição de uma função a variável para declarar na view
        $contacts = $this->getContacts();


        // Compact de Atribuição de variável em Laravel
        $contactInfo = [
            'id' => "1",
            'nome' => "Neander Fontes",
            'idade' => "34",
            'profissao' => "Desenvolvedor",
            'cidade' => "Braga"
        ];
        // dd($nome);

        // Return da declaração dos dados para a view "desenvolvedor.blade.php"
        return view('desenvolvedor.developer', compact(
            'contactInfo',
            'contacts'
        ));
    }
}
