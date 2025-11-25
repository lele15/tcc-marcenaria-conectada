<?php

namespace App\Http\Controllers;

use App\Models\Favorito;
use Illuminate\Http\Request;

class FavoritoController extends Controller
{
    /**
     * Lista favoritos do usuário
     */
    public function index()
    {
        $favoritos = Favorito::with('produto')
            ->where('user_id', auth()->id())
            ->get();

        return view('favoritos.index', compact('favoritos'));
    }

    /**
     * Adiciona aos favoritos
     */
    public function store(Request $request)
    {
        $request->validate([
            'produto_id' => 'required|exists:produtos,id',
        ]);

        Favorito::firstOrCreate([
            'user_id'    => auth()->id(),
            'produto_id' => $request->produto_id,
        ]);

        return back()->with('success', 'Produto favoritado!');
    }

    /**
     * Remove dos favoritos
     */
    public function destroy($id)
    {
        Favorito::where('user_id', auth()->id())
            ->where('produto_id', $id)
            ->delete();

        return back()->with('success', 'Produto removido dos favoritos!');
    }
}
