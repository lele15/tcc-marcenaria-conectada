<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoPedido extends Model
{
    use HasFactory;
    public function pedido (){
        return $this->belongsTo('App/Models/Pedido');
    }
    public function produto (){
        return $this->belongsTo('App/Models/Produto');
    }
}
