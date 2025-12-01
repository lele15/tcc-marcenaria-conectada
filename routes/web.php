<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CarrinhoController;
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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
apaguei o arquivo dashbo ard
*/

Route::middleware('auth')->group(function () {
Route::post('/carrinho/adicionar', [CarrinhoController::class, 'adicionar'])->name('carrinho.adicionar');
Route::post('/carrinho/add', [CarrinhoController::class, 'adicionar'])->name('carrinho.add');
Route::get('/carrinho', [CarrinhoController::class, 'index'])->name('carrinho.index');
Route::get('/carrinho/remover/{produtoId}', [CarrinhoController::class, 'remover'])->name('carrinho.remover');
Route::get('/carrinho/limpar', [CarrinhoController::class, 'limpar'])->name('carrinho.limpar');
Route::get('/carrinho/finalizar', [CarrinhoController::class, 'finalizar'])->name('carrinho.finalizar');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/profile', [ProfileController::class, 'view'])->name('profile.view');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/historico', [HomeController::class, 'historico'])->name('historico');
//Route::get('/carrinho', [HomeController::class, 'carrinho'])->name('carrinho')->middleware(['auth', 'verified']);
Route::get('/favoritos', [HomeController::class, 'favoritos'])->name('favoritos')->middleware(['auth', 'verified']);
Route::get('/visualizarcliente', [HomeController::class, 'visualizarcliente'])->name('visualizarcliente');
Route::get('/visualizarfabricante', [HomeController::class, 'visualizarfabricante'])->name('visualizarfabricante');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/login', [ProdutoController::class, 'login'])->name('login');

Route::resource('/produtos', ProdutoController::class)/*->middleware(['auth', 'verified'])*/;

require __DIR__.'/auth.php';
