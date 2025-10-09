<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProdutoControllerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/historico', [HomeController::class, 'historico'])->name('historico');
Route::get('/carrinho', [HomeController::class, 'carrinho'])->name('carrinho');
Route::get('/favoritos', [HomeController::class, 'favoritos'])->name('favoritos');
Route::get('/painel', [HomeController::class, 'painel'])->name('painel');
Route::get('/visualizarcliente', [HomeController::class, 'visualizarcliente'])->name('visualizarcliente');
Route::get('/visualizarfabricante', [HomeController::class, 'visualizarfabricante'])->name('visualizarfabricante');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/cadastrarproduto', [ProdutoController::class, 'cadastrarproduto'])->name('cadastrarproduto');
Route::get('/login', [ProdutoController::class, 'login'])->name('login');
Route::get('/editarproduto', [ProdutoController::class, 'editarproduto'])->name('editarproduto');
Route::get('/editarperfil', [ClienteController::class, 'editarperfil'])->name('editarperfil');
