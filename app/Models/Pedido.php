<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    public function cliente (){
        return $this->belongsTo('App/Models/Cliente');
    }
    public function produto (){
        return $this->belongsToMany('App/Models/Produto', 'produto_pedidos');
    }
    public function carrinho (){
        return $this->hasOne('App/Models/Carrinho');
    }
}

