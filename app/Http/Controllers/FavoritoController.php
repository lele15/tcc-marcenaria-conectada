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

    public function toggle($id)
    {
        if (!Produto::where('id', $id)->exists()) {
            return back()->with('error', 'Produto não encontrado.');
        }

        $fav = Favorito::where('user_id', auth()->id())
                        ->where('produto_id', $id)
                        ->first();

        if ($fav) {
            // usa query builder ao invés de $fav->delete()
            Favorito::where('user_id', auth()->id())
                    ->where('produto_id', $id)
                    ->delete();

            return back()->with('success', 'Removido dos favoritos!');
        }

        Favorito::create([
            'user_id'    => auth()->id(),
            'produto_id' => $id
        ]);

        return back()->with('success', 'Adicionado aos favoritos!');
    }

    public function destroy($produto_id)
    {
        Favorito::where('user_id', auth()->id())
                ->where('produto_id', $produto_id)
                ->delete();

        return back()->with('success', 'Favorito removido!');
    }




   /* public function toggle(Produto $produto)
    {
        $fav = Favorito::where('user_id', auth()->id())
                       ->where('produto_id', $produto->id)
                       ->first();

        if ($fav) {
            $fav->delete();
            return back()->with('success', 'Removido dos favoritos!');
        }

        Favorito::create([
            'user_id' => auth()->id(),
            'produto_id' => $produto->id
        ]);

        return back()->with('success', 'Adicionado aos favoritos!');
    }*/
}
