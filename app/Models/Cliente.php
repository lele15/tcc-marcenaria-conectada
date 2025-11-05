<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user(){
        return $this->belongsTo('App/Models/User');
    }
    public function produto (){
        return $this->belongsToMany('App/Models/Produto', 'favoritos');
    }
    public function pedido (){
        return $this->hasMany('App/Models/Pedido');
    }
}
