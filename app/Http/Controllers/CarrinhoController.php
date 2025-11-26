<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\Produto;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    // Mostrar carrinho do cliente
    public function index()
    {
        $itens = Carrinho::with('produto')
            ->where('user_id', auth()->id())
            ->get();

        return view('carrinho.index', compact('itens'));
    }

    // Adicionar ao carrinho (ou atualizar quantidade se já existir)
    public function store(Request $request)
    {
        $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'quantidade'   => 'required|integer|min:1'
        ]);

        Carrinho::updateOrCreate(
            [
                'user_id'    => auth()->id(),
                'produto_id' => $request->produto_id
            ],
            [
                'quantidade'   => $request->quantidade
            ]
        );

        return back()->with('success', 'Produto adicionado ao carrinho!');
    }

    // Atualizar quantidade de um item específico
    public function update(Request $request, string $id)
    {
        $request->validate([
            'quantidade' => 'required|integer|min:1'
        ]);

        $item = Carrinho::where('user_id', auth()->id())
            ->where('id', $id)
            ->first();

        if (!$item) {
            return back()->with('error', 'Item não encontrado no carrinho.');
        }

        $item->quantidade = $request->quantidade;
        $item->save();

        return back()->with('success', 'Quantidade atualizada!');
    }

    // Remover item do carrinho
    public function destroy(string $id)
    {
        $deleted = Carrinho::where('user_id', auth()->id())
                ->where('id', $id)
                ->delete();

        if (!$deleted) {
            return back()->with('error', 'Item não encontrado.');
        }

        return back()->with('success', 'Item removido!');
    }

    // Limpar carrinho inteiro
    public function clear()
    {
        Carrinho::where('user_id', auth()->id())->delete();
        return back()->with('success', 'Carrinho limpo!');
    }

    // Finalizar: monta mensagem e redireciona para WhatsApp do fabricante principal dos itens
    public function finalizar()
    {
        $itens = Carrinho::where('user_id', auth()->id())->with('produto.fabricante')->get();

        if ($itens->isEmpty()) {
            return back()->with('error', 'Seu carrinho está vazio!');
        }

        // Monta mensagem
        $mensagem = "Olá! Gostaria de fazer um pedido:%0A%0A";
        foreach ($itens as $item) {
            $mensagem .= "- {$item->produto->nome} (Qtd: {$item->quantidade})%0A";
        }
        $mensagem .= "%0A*Pedido realizado pelo sistema Marcenaria Conectada.*";

        // Pegar número do fabricante do primeiro item
        $fabricante = $itens->first()->produto->fabricante ?? null;
        $numero = $fabricante && !empty($fabricante->whatsapp) ? preg_replace('/\D/','', $fabricante->whatsapp) : '5541991822190';


        Carrinho::where('user_id', auth()->id())->delete();

        return redirect("https://wa.me/{$numero}?text={$mensagem}");
    }
}
