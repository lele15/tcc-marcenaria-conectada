<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function login() {
        return view('login');
    }

    public function editarperfil() {
        return view('editarperfil');
    }
}
