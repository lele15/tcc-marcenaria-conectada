<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Fabricante;
use App\Models\ProdutoCarrinho;

class ProdutoController extends Controller
{
    /**
     * Lista produtos ativos
     */
    public function index()
    {
        $produtos = Produto::where('ativo', 1)->get();
        return view('produtos.index', compact('produtos'));
    }

    /**
     * Form de criação
     */
    public function create()
    {
        $fabricantes = \App\Models\Fabricante::all();
        return view('produtos.create', compact('fabricantes'));
    }

    /**
     * Salvar novo produto
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome'        => 'required|string|max:255',
            'descricao'   => 'required|string',
            'preco'       => 'required|numeric|min:0',
            'categoria'   => 'required|string',
            'altura'      => 'required|numeric|min:0',
            'largura'     => 'required|numeric|min:0',
            'profundidade'=> 'nullable|numeric|min:0',
            'foto'        => 'nullable|image|max:4096',
        ]);

        $produto = new Produto();

        $produto->nome        = mb_strtoupper($request->nome, 'UTF-8');
        $produto->descricao   = mb_strtoupper($request->descricao, 'UTF-8');
        $produto->preco       = $request->preco;
        $produto->categoria   = mb_strtoupper($request->categoria, 'UTF-8');
        $produto->altura      = $request->altura;
        $produto->largura     = $request->largura;
        $produto->profundidade= $request->profundidade ?? 0;
        $produto->ativo       = 1;
        $produto->fabricante_id = 1;

        $produto->save();

        if ($request->hasFile('foto')) {
            $ext = $request->file('foto')->getClientOriginalExtension();
            $name = $produto->id . '_' . time() . '.' . $ext;

            $request->file('foto')->storeAs('fotos', $name, ['disk' => 'public']);
            $produto->foto = 'fotos/' . $name;
            $produto->save();
        }

        return redirect()->route('produtos.index');
    }

    /**
     * Form de edição
     */
    public function edit($id)
    {
        $produto = Produto::find($id);
        $fabricantes = Fabricante::all();


        if (!$produto) {
            return redirect()->route('produtos.index');
        }

        return view('produtos.edit', compact('produto', 'fabricantes'));
    }

    /**
     * Atualizar produto
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome'        => 'required|string|max:255',
            'descricao'   => 'required|string',
            'preco'       => 'required|numeric|min:0',
            'categoria'   => 'required|string',
            'altura'      => 'required|numeric|min:0',
            'largura'     => 'required|numeric|min:0',
            'profundidade'=> 'nullable|numeric|min:0',
            'foto'        => 'nullable|image|max:4096',
        ]);

        $produto = Produto::find($id);

        if (!$produto) {
            return redirect()->route('produtos.index');
        }

        $produto->nome        = mb_strtoupper($request->nome, 'UTF-8');
        $produto->descricao   = mb_strtoupper($request->descricao, 'UTF-8');
        $produto->preco       = $request->preco;
        $produto->categoria   = mb_strtoupper($request->categoria, 'UTF-8');
        $produto->altura      = $request->altura;
        $produto->largura     = $request->largura;
        $produto->profundidade= $request->profundidade ?? 0;
        $produto->fabricante_id = 1;

        $produto->save();

        if ($request->hasFile('foto')) {
            $ext = $request->file('foto')->getClientOriginalExtension();
            $name = $produto->id . '_' . time() . '.' . $ext;

            $request->file('foto')->storeAs('fotos', $name, ['disk' => 'public']);
            $produto->foto = 'fotos/' . $name;
            $produto->save();
        }

        return redirect()->route('produtos.index');
    }

    /**
     * Deletar produto
     */
    /*public function destroy($id)
    {
        $produto = Produto::find($id);

        if ($produto) {
            $produto->delete();
        }
        return redirect()->route('produtos.index');
    }*/


/**
 * Deletar produto
 */
public function destroy($id)
{
    // Encontra o produto pelo ID ou retorna erro
    $produto = Produto::find($id);

    if ($produto) {
        // Deleta todos os registros relacionados no carrinho
        ProdutoCarrinho::where('produto_id', $produto->id)->delete();

        // Deleta o produto
        $produto->delete();

        // Redireciona com mensagem de sucesso
        return redirect()->route('produtos.index')
                         ->with('success', 'Produto deletado com sucesso!');
    }

    // Se o produto não existir, redireciona com erro
    return redirect()->route('produtos.index')
                     ->with('error', 'Produto não encontrado.');
}


    /**
     * Ativar / desativar
     */
    public function toggleActive($id)
    {
        $produto = Produto::findOrFail($id);

        $produto->ativo = !$produto->ativo;
        $produto->save();

        return back()->with('status', 'Produto atualizado.');
    }
}
