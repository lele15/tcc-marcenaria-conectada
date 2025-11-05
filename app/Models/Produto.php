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
        return $this->belongsTo('App/Models/Fabricante');
    }
    public function cliente (){
        return $this->belongsToMany('App/Models/Cliente', 'favoritos');
    }
    public function pedido (){
        return $this->belongsToMany('App/Models/Pedido', 'produto_pedidos');
    }
}
