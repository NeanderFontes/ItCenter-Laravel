<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DeveloperController;

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
// Rota Principal "HomeController.php" da welcome.blade.php
Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/', [HomeController::class, 'create'])->name('welcome');

// Rota Principal "ProductController.php" da product.blade.php de 'Sabores'
Route::get('/produtos', [ProductController::class, 'index'])->name('produtos.product');
// Rotas CRUD para "ProductController.php"
// Rota post
// Rota delete

// Rota para o Controller "DeveloperController.php" da developer.blade.php
Route::get('/desenvolvedor', [DeveloperController::class, 'index'])->name('desenvolvedor.developer');
