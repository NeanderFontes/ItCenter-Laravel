<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Exibe todos os usuários.
     *
     * @return \Illuminate\View\View
     */
    public function getAllUsers()
    {
        $search = request()->query('search') ? request()->query('search') : null;

        // Obtém informações específicas do CESAE.
        $cesaeInfo = $this->getCesaeInfo();

        // Obtém todos os usuários do banco de dados.
        $allUsers = $this->allUsers();

        // Query para
        if(request()->query('user_id')) {
            $user = User::where('id', request()->query('user_id')->get());
        } elseif($search) {
            // Query para search
            $user = User::where('name', "LIKE", "%{$search}%")->get();
        } else {
            // Obtém todos os usuários do banco de dados.
            $users = $allUsers;
        }



        // Retorna a view 'users.all_users' com dados.
        return view('users.all_users',
        compact(
            'cesaeInfo',
            'users',
            'allUsers'
        ));
    }

    /**
     * Exibe o formulário para adicionar um novo usuário.
     *
     * @return \Illuminate\View\View
     */
    public function addUser()
    {
        // Retorna a view 'users.add_user'.
        return view('users.add_user');
    }

    /**
     * Exibe o formulário para visualizar/editar um usuário existente.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function viewUser($id)
    {
        // Obtém informações de um usuário específico usando Eloquent.
        $user = User::find($id);

        // Retorna a view 'users.add_user' com dados do usuário.
        return view('users.add_user', compact('user'));
    }

    /**
     * Exclui um usuário e suas tarefas associadas.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteUser($id)
    {
        // Exclui todas as tarefas associadas ao usuário.
        DB::table('tasks')->where('user_id', $id)->delete();

        // Exclui o usuário.
        User::where('id', $id)->delete();

        // Retorna para a página anterior.
        return back();
    }

    /**
     * Armazena um novo usuário ou atualiza um existente.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeUser(Request $request)
    {
        // Regras de validação para o formulário.
        $rules = [
            'email' => 'required|email|unique:users,email,' . $request->user_id,
            'name' => 'string|max:50',
            'password' => 'min:6',
        ];

        // Executa a validação.
        $request->validate($rules);

        // Verifica se é uma atualização ou inserção com base na presença de um ID.
        if ($request->user_id) {
            // Atualiza um usuário existente.
            User::where('id', $request->user_id)->update([
                'name' => $request->name,
                'address' => $request->address,
                'password' => Hash::make($request->password),
            ]);
        } else {
            // Insere um novo usuário.
            User::create([
                'email' => $request->email,
                'name' => $request->name,
                'password' => Hash::make($request->password),
            ]);
        }

        // Redireciona para a rota 'users.all'.
        return redirect()->route('users.all');
    }

    /**
     * Obtém informações específicas do CESAE.
     *
     * @return array
     */
    protected function getCesaeInfo()
    {
        return [
            'name' => 'Cesae',
            'address' => 'Europarque',
            'email' => 'Cesae@gmail.com',
        ];
    }

    /**
     * Obtém todos os usuários do banco de dados usando Eloquent.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    protected function allUsers()
    {
        return User::all();
    }
}
