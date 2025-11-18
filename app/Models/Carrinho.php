<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    use HasFactory;
    public function user (){
        return $this->belongsTo('App/Models/User');
    }

    public function produto (){
        return $this->belongsToMany('App/Models/Produto', 'produto_carrinhos');
    }
}
