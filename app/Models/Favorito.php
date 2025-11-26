<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    protected $table = 'favoritos';

    protected $fillable = [
        'user_id',
        'produto_id',
    ];

    // Favorito pertence a um produto
    public function produto()
    {
        return $this->belongsTo(Produto::class, 'produto_id');
    }

    // Favorito pertence a um usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

