<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->middleware('password.confirm')->name('profile.destroy');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/historico', [HomeController::class, 'historico'])->name('historico');
Route::get('/carrinho', [HomeController::class, 'carrinho'])->name('carrinho')->middleware(['auth', 'verified']);
Route::get('/favoritos', [HomeController::class, 'favoritos'])->name('favoritos')->middleware(['auth', 'verified']);
Route::get('/visualizarcliente', [HomeController::class, 'visualizarcliente'])->name('visualizarcliente');
Route::get('/visualizarfabricante', [HomeController::class, 'visualizarfabricante'])->name('visualizarfabricante');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/login', [ProdutoController::class, 'login'])->name('login');
Route::get('/editarperfil', [ClienteController::class, 'editarperfil'])->name('editarperfil');

Route::resource('/produtos', ProdutoController::class)->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
