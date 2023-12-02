<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
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

// Rotas para Categoria dos Produtos
Route::get('categorias', [CategoryController::class, 'index'])->name('categorias.category');

// Rota Principal "ProductController.php" da product.blade.php de 'Sabores'
Route::get('/produtos', [ProductController::class, 'index'])->name('produtos.product');
Route::get('/produtos/{id}', [ProductController::class, 'indexProduto'])->name('produtoCategoria');
Route::get('/produtos/del/{id}', [ProductController::class, 'produtoDelete'])->name('produtoDelete');
Route::get('/produtos/produtoUpdate/{id}',[ProductController::class, 'produtoUpdate'])->name('produtoUpdate');
Route::put('/produtos/produto/add/',[ProductController::class, 'produtoStore'])->name('produtoStore');
Route::get('/produtos/produto/create', [ProductController::class, 'createProduto'])->name('createProduto');
Route::post('/produtos/produto', [ProductController::class, 'store'])->name('createProduct');

// Rota para o Controller "DeveloperController.php" da developer.blade.php
Route::get('/desenvolvedor', [DeveloperController::class, 'index'])->name('desenvolvedor.developer');
