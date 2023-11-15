<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Obtém os dados principais para a página inicial e exibe a view 'general.home'.
     *
     * @return \Illuminate\View\View
     */
    public function getMain()
    {
        // Variável de saudação.
        $hello = 'Hello World';

        // Dias da semana.
        $weekDays = [
            'Segunda',
            'Terça',
            'Quarta'
        ];

        // Obtém informações de um usuário específico.
        $user = DB::table('users')
            ->where('id', 2)
            ->first();

        // Obtém todos os usuários.
        $users = $this->getAllUsers();

        // Retorna a view 'general.home' com os dados.
        return view('general.home', compact(
            'hello',
            'weekDays',
            'user',
            'users'
        ));
    }

    /**
     * Obtém todos os usuários do banco de dados.
     *
     * @return \Illuminate\Support\Collection
     */
    protected function getAllUsers()
    {
        // Obtém todos os usuários do banco de dados.
        $users = DB::table('users')
            ->get();

        return $users;
    }
}
