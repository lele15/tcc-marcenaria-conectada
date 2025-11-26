<?php

namespace App\Http\Controllers;

use App\Models\Favorito;
use App\Models\Produto;
use Illuminate\Http\Request;

class FavoritoController extends Controller
{
    // Lista os favoritos do cliente
    public function index()
    {
        $favoritos = Favorito::with('produto')
            ->where('user_id', auth()->id())
            ->get();

        return view('favoritos.index', compact('favoritos'));
    }

    // Adiciona aos favoritos (via form)
    public function store(Request $request)
    {
        $request->validate([
            'produto_id' => 'required|exists:produtos,id'
        ]);

        Favorito::firstOrCreate([
            'user_id'    => auth()->id(),
            'produto_id' => $request->produto_id
        ]);

        return back()->with('success', 'Produto adicionado aos favoritos!');
    }

    // Alterna favorito ↔ remover
    public function toggle($id)
    {
        if (!Produto::where('id', $id)->exists()) {
            return back()->with('error', 'Produto não encontrado.');
        }

        $fav = Favorito::where('user_id', auth()->id())
                        ->where('produto_id', $id)
                        ->first();

        if ($fav) {
            $fav->delete();
            return back()->with('success', 'Removido dos favoritos!');
        }

        Favorito::create([
            'user_id'    => auth()->id(),
            'produto_id' => $id
        ]);

        return back()->with('success', 'Adicionado aos favoritos!');
    }

    // Remove favorito (rota DELETE)
    public function destroy(string $id)
    {
        Favorito::where('user_id', auth()->id())
                ->where('produto_id', $id)
                ->delete();

        return back()->with('success', 'Favorito removido!');
    }
}
