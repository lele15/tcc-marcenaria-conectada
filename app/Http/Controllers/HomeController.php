<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home');
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

    public function painel() {
        return view('painel');
    }

    public function visualizarcliente() {
        return view('visualizarcliente');
    }

    public function visualizarfabricante() {
        return view('visualizarfabricante');
    }
}
