<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Favorito;

class HomeController extends Controller
{
    public function index() {
        // pega todos os produtos ativos e já carrega se estão nos favoritos do usuário logado
        $produtos = Produto::where('ativo', 1)
                        ->with(['favoritoDoUsuario' => function($query) {
                            $query->where('user_id', auth()->id());
                        }])
                        ->get();

        return view('home', compact('produtos'));
    }


    /*public function index() {
        $produtos = Produto::where('ativo', 1)->get();
        return view('home', compact('produtos'));
    }*/

    public function login() {
        return view('auth.login');
    }

    public function historico() {
        return view('historico');
    }

    public function carrinho() {
        return view('carrinho.index');
    }

    public function favoritos()
    {
        $favoritos = Favorito::with('produto')
            ->where('user_id', auth()->id())
            ->get();

        return view('favorito.index', compact('favoritos'));
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
