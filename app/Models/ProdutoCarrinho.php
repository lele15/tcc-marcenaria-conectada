<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoCarrinho extends Model
{
    use HasFactory;

    protected $table = 'produto_carrinhos';

    protected $fillable = [
        'produto_id',
        'carrinho_id'
    ];

    public function carrinho (){
       // return $this->belongsTo('App/Models/Carrinho');
        return $this->belongsTo(Produto::class, 'produto_id');

    }
    public function produto (){
       // return $this->belongsTo('App/Models/Produto');
        return $this->belongsTo(Carrinho::class, 'carrinho_id');

    }
}
