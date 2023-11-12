<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // Chamada de função por POO para HomerController
    public function getMain() {
        // Passagem de valor para acesso em html
        $hello = "Hello World";
        
        // Criação de variável para acessar o banco de dados da tabela 'users'
        $users = DB::table('users') -> first();
        //dd($users);

        // Query para obter dados do 'id 2' da tabela e buscar pelos dados quaisquer
        $user = DB::table('users') -> where('id', 2) -> first();
        //dd($user);

        // Atribuição na variável da função 'AllUsers'
        $allusers = $this -> getAllUsers();

        // Atribuição na variável da função 'AllTasks'
        $allTasks = $this -> getAllTasks();
        //dd($allTasks);

        // Final da função 
        return view('general.home', compact(
            'hello',
            'user',
            'allusers',
            'allTasks'
        ));
    }

    public function viewUser($id){

        $user = Db::table('users')
                ->where('id',$id)
                ->first();

        return view('users.view_user', compact(
            'user'
        ));
    }

    protected function getAllUsers() {
        // Exercicio Query Builder 'receber todos resultados da tabela através de aray e representar pelo forEach'
        $allusers = DB::table('users') -> get();
        //dd($allusers);

        return $allusers;
    }

    protected function getAllTasks() {
        // Exercicio Query Builder acessar todos dados da tabela 'tasks' em Mysql
        $tabelaTasks = DB::table('tasks') -> get();
        //($tabelaTasks);

        return $tabelaTasks;
    }
}
