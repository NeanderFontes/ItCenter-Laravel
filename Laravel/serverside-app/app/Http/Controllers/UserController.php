<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    // Chamada de função por POO para UserController
    public function getMainUser() {
        // Passagem de valor para acesso em html
        return view('users.add_users');
    }

    public function getAllUsers(){

        $cesaeInfo = $this -> getCesaeInfo();
        $users = $this->allUsers();

        ///dd($cesaeInfo);

        return view('users.all_users',
        compact('cesaeInfo',
        'users',
    ));
    }

    public function addUser(){
        return view('users.add_user');
    }

    public function viewUser($id){

        $user = Db::table('users')
                ->where('id',$id)
                ->first();

        return view('users.add_users', compact(
            'user'
        ));
    }

    public function deleteUser($id){

        Db::table('tasks')
        ->where('user_id',$id)
        ->delete();

        Db::table('users')
                ->where('id',$id)
                ->delete();

        return back();
    }

    // Função para obter dados do utilizador pelo forms
    public function storeUser(Request $request) {
        $request -> validate([
            // Validação de dados pelo backend
            'email' => 'required|unique:users|email',
            'name' => 'string|max:50',
            'password' => 'min:6'
        ]);


        // Inserir dados do utilizador ao banco de dados na tabela 'users'
        User::insert([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);

        return redirect() -> route('users.all');
    }


    protected function getCesaeInfo(){
        $cesaeInfo = [
            'name' => 'Cesae',
            'address' => 'Europarque',
            'email' => 'Cesae@gmail.com',
        ];

       // $cesaeInfo['email'];
        return $cesaeInfo;
    }

    protected function allUsers(){
        $users = db::table('users')
                ->get();

        return $users;

    }
}
