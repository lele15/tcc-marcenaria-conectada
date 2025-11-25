<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    protected $table = 'carrinhos';

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
    ];

    // Um item do carrinho pertence a um produto
    public function produto()
    {
        return $this->belongsTo(Produto::class, 'product_id');
    }

    // Um item do carrinho pertence a um usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

