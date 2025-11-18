<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoCarrinho extends Model
{
    use HasFactory;

    public function carrinho (){
        return $this->belongsTo('App/Models/Carrinho');
    }
    public function produto (){
        return $this->belongsTo('App/Models/Produto');
    }
}
