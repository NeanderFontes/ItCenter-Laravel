<?php

use Illuminate\Support\Facades\Route;
// Rota Adicionada ao endereçamento do elemento HomeController
use App\Http\Controllers\HomeController;
// Rota Adicionada ao endereçamento do elementoUserController
use App\Http\Controllers\UserController;
use App\Http\Controllers\TasksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rota de acesso para "Home" Laravel
Route::get('/', function () {
    return view('welcome');
});

// Rota de acesso para "home.blade.php"
// Route::get('/home', function () {
//     // Passagem de valor para acesso em html
//     $hello = "Hello World";
//     return view('general.home', compact('hello'));
// }) -> name('home');


// Rota de acesso para "home.blade.php"
Route::get('/home', [HomeController::class, 'getMain']) -> name('home');

// Rota de Acesso para exemplo de "all_users.blade.php"
Route::get('/all-users', [UserController::class, 'getAllUsers'] )->name('users.all');

// Rota de Acesso para adicionar Utilizador de "add_users.blade.php"
Route::get('/add-user', [UserController::class, 'addUser'])->name('users.add');

// Rota para transportar dados do utilizador ao DB
Route::post('/store-user', [UserController::class, 'storeUser'])->name('users.store');

// Rotas de acesso para btn de "all_users.blade.php"
Route::get('/view-user/{id}', [UserController::class, 'viewUser'])->name('users.view');
Route::get('/delete-user/{id}', [UserController::class, 'deleteUser'])->name('users.delete');

// Rota de acesso para todas as tarefas
Route::get('/all-tasks', [TasksController::class, 'getAllTasks'] )->name('tasks.all_tasks');

// Route::get('/all-users', function () {
//     return view('users.all_users');

//     // Fallback utilizado direto ao código html
// }) -> name('users.all');

// Rota Criada para Acessar o Exercicio "add.users.blade.php"
Route::get('/add-users', function () {
    return view('users.add_users');
}) -> name('users.add');

// Adicionando Rotas alternativa para erro 404
Route::fallback(function () {
    return view('erros.fallback');
});

// Rota para 'Todas as Tarefas', Exercicio 'Query Builder'
// Route::get('/todas-tarefas', function() {
//     return view('users.todas_tarefas');
// }) -> name('users.tarefas');
