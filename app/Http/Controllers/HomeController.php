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
        return view('login');
    }

    public function historico() {
        return view('historico');
    }

    public function carrinho() {
        return view('carrinho');
    }

    public function favoritos() {
        return view('favoritos');
    }

    public function painel(){

        $produtos = Produto::all();
        return view('painel', compact('produtos'));
    }

    public function visualizarcliente() {
        return view('visualizarcliente');
    }

    public function visualizarfabricante() {
        return view('visualizarfabricante');
    }
}
