<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Monolog\Handler\FingersCrossed\ActivationStrategyInterface;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::where('ativo', 1)->get();
        return view('produtos.index', compact('produtos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produto = new Produto();


        $produto->nome = mb_strtoupper($request->nome, 'UTF-8');
        $produto->descricao = mb_strtoupper($request->descricao, 'UTF-8');
        $produto->preco = $request->preco;
        $produto->categoria = mb_strtoupper($request->categoria, 'UTF-8');
        $produto->altura = $request->altura;
        $produto->largura = $request->largura;
        if($request->profundidade){
            $produto->profundidade = $request->profundidade;
        }
        else{
            $produto->profundidade = 0;
        }
        $produto->ativo = 1;
        $produto->fabricante_id = 1;
        $produto->save();

        if($request->hasFile('foto')) {
            // Upload File
            $extensao_arq = $request->file('foto')->getClientOriginalExtension();
            $name = $produto->id.'_'.time().'.'.$extensao_arq;
            $request->file('foto')->storeAs('fotos', $name, ['disk' => 'public']);
            $produto->foto = 'fotos/'.$name;
            $produto->save();
        }

        return redirect()->route('produtos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produto= Produto::find($id);

        if(isset($produto)) {
            return view('produtos.edit', compact('produto'));
        }

        return redirect()->route('produtos.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $produto= Produto::find($id);

        if(isset($produto)) {
            
            $produto->nome = mb_strtoupper($request->nome, 'UTF-8');
            $produto->descricao = mb_strtoupper($request->descricao, 'UTF-8');
            $produto->preco = $request->preco;
            $produto->categoria = mb_strtoupper($request->categoria, 'UTF-8');
            $produto->altura = $request->altura;
            $produto->largura = $request->largura;
            if($request->profundidade){
                $produto->profundidade = $request->profundidade;
            }
            else{
                $produto->profundidade = 0;
            }

            $produto->save();

            if($request->hasFile('foto')) {
            // Upload File
            $extensao_arq = $request->file('foto')->getClientOriginalExtension();
            $name = $produto->id.'_'.time().'.'.$extensao_arq;
            $request->file('foto')->storeAs('fotos', $name, ['disk' => 'public']);
            $produto->foto = 'fotos/'.$name;
            $produto->save();
        }
        }

        return redirect()->route('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produto= Produto::find($id);

        if(isset($produto)) {
            $produto->delete();
        }

        return redirect()->route('produtos.index');
    }
}
