<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    /**
     * Obtém todas as tarefas e exibe a view 'tasks.all_tasks'.
     *
     * @return \Illuminate\View\View
     */
    public function getAllTasks()
    {
        // Obtém todas as tarefas do banco de dados.
        $tasks = $this->allTasks();

        // Retorna a view 'tasks.all_tasks' com os dados das tarefas.
        return view('tasks.all_tasks', compact('tasks'));
    }

    /**
     * Exibe os detalhes de uma tarefa específica.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function viewTask($id)
    {
        // Obtém os detalhes de uma tarefa específica, incluindo o nome do usuário responsável.
        $task = DB::table('tasks')
                ->where('tasks.id', $id)
                ->join('users', 'tasks.user_id', '=', 'users.id')
                ->select('tasks.*', 'users.name as resname')
                ->first();

        // Retorna a view 'tasks.view_task' com os detalhes da tarefa.
        return view('tasks.view_task', compact('task'));
    }

    /**
     * Exclui uma tarefa específica.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteTask($id)
    {
        // Exclui a tarefa do banco de dados.
        DB::table('tasks')->where('id', $id)->delete();

        // Retorna para a página anterior.
        return back();
    }

    /**
     * Exibe o formulário para adicionar uma nova tarefa.
     *
     * @return \Illuminate\View\View
     */
    public function addTask()
    {
        // Obtém todos os usuários para o formulário.
        $users = DB::table('users')->get();

        // Retorna a view 'tasks.add_task' com os usuários.
        return view('tasks.add_task', compact('users'));
    }

    /**
     * Armazena uma nova tarefa no banco de dados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeTask(Request $request)
    {
        // Regras de validação para o formulário de adição de tarefa.
        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string',
            'user_id' => 'required|string',
        ]);

        // Insere a nova tarefa no banco de dados.
        DB::table('tasks')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => $request->user_id,
        ]);

        // Redireciona para a rota 'tasks.all'.
        return redirect()->route('tasks.all');
    }

    /**
     * Obtém todas as tarefas, incluindo o nome do usuário responsável, usando Eloquent.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    protected function allTasks()
    {
        // Obtém todas as tarefas e o nome do usuário responsável usando Eloquent.
        $tasks = Task::join('users', 'tasks.user_id', '=', 'users.id')
                ->select('tasks.*', 'users.name as resname')
                ->get();

        return $tasks;
    }
}
