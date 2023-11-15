<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TasksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui são definidas as rotas da aplicação web Laravel.
|
*/

// Rota padrão que retorna a view 'welcome'.
Route::get('/', function () {
    return view('welcome');
});

// Rota para a página principal, usando o método 'getMain' do controlador 'HomeController'.
Route::get('/home', [HomeController::class, 'getMain'])->name('home');

// Rotas relacionadas a usuários
Route::get('/all-users', [UserController::class, 'getAllUsers'])->name('users.all');
Route::post('/store-user', [UserController::class, 'storeUser'])->name('users.store');
Route::get('/delete-user/{id}', [UserController::class, 'deleteUser'])->name('users.delete');
Route::get('/add-user', [UserController::class, 'addUser'])->name('users.add');
Route::get('/view-user/{id}', [UserController::class, 'viewUser'])->name('users.view');

// Rotas relacionadas a tarefas
Route::get('/all-tasks', [TasksController::class, 'getAllTasks'])->name('tasks.all');
Route::get('/view-task/{id}', [TasksController::class, 'viewTask'])->name('tasks.view');
Route::get('/delete-task/{id}', [TasksController::class, 'deleteTask'])->name('tasks.delete');
Route::get('/add-task', [TasksController::class, 'addTask'])->name('tasks.add');
Route::post('/store-task', [TasksController::class, 'storeTask'])->name('tasks.store');

// Rota simples que retorna uma mensagem HTML.
Route::get('/hello', function () {
    return '<h2>Hello Turma SD</h2>';
})->name('cucu');

// Rota fallback para lidar com solicitações não correspondentes a nenhuma rota anteriormente definida.
Route::fallback(function(){
    return view('errors.fallback');
});
