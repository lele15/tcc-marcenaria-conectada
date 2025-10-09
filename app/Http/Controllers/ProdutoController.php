<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function cadastrarproduto() {
        return view('cadastrarproduto');
    }

    public function login() {
        return view('login');
    }

    public function editarproduto() {
        return view('editarproduto');
    }
}
