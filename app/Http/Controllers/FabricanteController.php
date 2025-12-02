<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Fabricante;
use App\Models\User;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


use function Laravel\Prompts\password;

class FabricanteController extends Controller
{
    /**
     * Mostrar perfil do fabricante
     */
    public function view()
    {
        $user = Auth::user();
        $fabricante = Fabricante::where('user_id', $user->id)->firstOrFail();

        return view('fabricante.view', compact('fabricante', 'user'));
    }


}
