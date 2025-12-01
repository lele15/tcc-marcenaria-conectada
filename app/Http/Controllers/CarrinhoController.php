<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\ProdutoCarrinho;
use App\Models\Produto;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{

    // Adicionar um produto ao carrinho
    public function adicionar(Request $request)
    {
        $produtoId = $request->produto_id;
        $userId = auth()->id();

        // Procura ou cria carrinho do usuário
        $carrinho = Carrinho::firstOrCreate(
            ['user_id' => $userId],
            ['total' => 0]
        );

        // Verifica se o produto já está no carrinho
        $existe = ProdutoCarrinho::where('produto_id', $produtoId)
                    ->where('carrinho_id', $carrinho->id)
                    ->first();

        if (!$existe) {
            ProdutoCarrinho::create([
                'produto_id' => $produtoId,
                'carrinho_id' => $carrinho->id
            ]);
        }

        return back()->with('success', 'Produto adicionado ao carrinho!');
    }



    public function index()
    {
        // pega usuário logado
        $userId = auth()->id();

        // busca o carrinho do usuário (ou null)
        $carrinho = \App\Models\Carrinho::where('user_id', $userId)
            ->with('produtos') // já traz a relação
            ->first();

        // se não existe, manda uma coleção vazia para a view
        if (! $carrinho) {
            return view('carrinho.index', ['itens' => collect()]);
        }

        // envia a coleção de produtos do carrinho
        return view('carrinho.index', ['itens' => $carrinho->produtos]);
    }


    // Remover item do carrinho
    public function remover($produtoId)
    {
        $carrinho = Carrinho::where('user_id', auth()->id())->first();

        if ($carrinho) {
            ProdutoCarrinho::where('produto_id', $produtoId)
                ->where('carrinho_id', $carrinho->id)
                ->delete();
        }

        return back()->with('success', 'Item removido!');
    }



    // Limpar carrinho
    public function limpar()
    {
        $carrinho = Carrinho::where('user_id', auth()->id())->first();

        if ($carrinho) {
            ProdutoCarrinho::where('carrinho_id', $carrinho->id)->delete();
        }

        return back()->with('success', 'Carrinho limpo!');
    }



    // Finalizar carrinho para WhatsApp
    public function finalizar()
    {
        $carrinho = Carrinho::where('user_id', auth()->id())->first();

        if (!$carrinho) {
            return back()->with('error', 'Seu carrinho está vazio!');
        }

        $itens = $carrinho->produtos()->with('fabricante')->get();

        if ($itens->isEmpty()) {
            return back()->with('error', 'Seu carrinho está vazio!');
        }

        // Mensagem WhatsApp
        $mensagem = "Olá! Gostaria de fazer um pedido:%0A%0A";

        foreach ($itens as $item) {
            $mensagem .= "- {$item->nome}%0A";
        }

        $mensagem .= "%0A*Pedido enviado via Marcenaria Conectada.*";

        // WhatsApp do fabricante do primeiro item
        $fabricante = $itens->first()->fabricante ?? null;

        $numero = $fabricante && !empty($fabricante->whatsapp)
            ? preg_replace('/\D/','', $fabricante->whatsapp)
            : '5541991822190';

        return redirect("https://wa.me/{$numero}?text={$mensagem}");
    }
}
