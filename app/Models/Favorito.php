<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    protected $table = 'favoritos';

    protected $fillable = [
        'user_id',
        'product_id',
    ];

    // Favorito pertence a um produto
    public function produto()
    {
        return $this->belongsTo(Produto::class, 'product_id');
    }

    // Favorito pertence a um usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

