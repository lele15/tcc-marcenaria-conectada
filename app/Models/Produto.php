<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';

    protected $fillable = [
        'nome',
        'descricao',
        'categoria',
        'altura',
        'largura',
        'profundidade',
        'preco',
        'foto',
        'ativo',
        'fabricante_id'
    ];

    // Produto pertence ao fabricante
    public function fabricante()
    {
        return $this->belongsTo(User::class, 'fabricante_id');
    }

    // Produto pode estar em vários favoritos
    public function favoritos()
    {
        return $this->hasMany(Favorito::class, 'product_id');
    }

    // Produto pode estar em vários carrinhos
    public function carrinhos()
    {
        return $this->hasMany(Carrinho::class, 'product_id');
    }
}
