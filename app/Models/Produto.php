<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function fabricante(){
        return $this->belongsTo('App\Models\Fabricante');
    }

    public function user (){
        return $this->belongsToMany('App\Models\Cliente', 'users');
    }

    public function pedido (){
        return $this->belongsToMany('App\Models\Pedido', 'produto_pedidos');
    }

    public function carrinho (){
        return $this->belongsToMany('App\Models\Carrinho', 'produto_carrinhos');
    }
}
