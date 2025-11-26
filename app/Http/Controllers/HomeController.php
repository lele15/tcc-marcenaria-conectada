<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class HomeController extends Controller
{
    public function index() {
        $produtos = Produto::where('ativo', 1)->get();
        return view('home', compact('produtos'));
    }

    public function login() {
        return view('auth.login');
    }

    public function historico() {
        return view('historico');
    }

    public function carrinho() {
        return view('carrinho.index');
    }

    public function favoritos() {
        return view('favorito.index');
    }

    public function painel(){

        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }

    public function visualizarcliente() {
        return view('profile.view');
    }

    public function visualizarfabricante() {
        return view('fabricante.view');
    }
}
