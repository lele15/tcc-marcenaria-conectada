<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    /**
     * Exibe todos os itens do carrinho do usuário logado.
     */
    public function index()
    {
        $itens = Carrinho::with('produto')
            ->where('user_id', auth()->id())
            ->get();

        return view('carrinho.index', compact('itens'));
    }

    /**
     * Adiciona item ao carrinho ou atualiza quantidade.
     */
    public function store(Request $request)
    {
        $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'quantidade'   => 'required|integer|min:1'
        ]);

        Carrinho::updateOrCreate(
            [
                'user_id'    => auth()->id(),
                'produto_id' => $request->produto_id,
            ],
            [
                'quantidade'   => $request->quantidade,
            ]
        );

        return back()->with('success', 'Produto adicionado ao carrinho!');
    }

    /**
     * Atualiza quantidade de um item do carrinho.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'quantidade' => 'required|integer|min:1'
        ]);

        $item = Carrinho::where('user_id', auth()->id())->findOrFail($id);
        $item->update(['quantidade' => $request->quantidade]);

        return back()->with('success', 'Quantidade atualizada!');
    }

    /**
     * Remove item específico.
     */
    public function destroy($id)
    {
        $item = Carrinho::where('user_id', auth()->id())->findOrFail($id);
        $item->delete();

        return back()->with('success', 'Item removido do carrinho!');
    }

    /**
     * Esvazia todo o carrinho
     */
    public function clear()
    {
        Carrinho::where('user_id', auth()->id())->delete();
        return back()->with('success', 'Carrinho esvaziado!');
    }
}
