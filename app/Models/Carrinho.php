<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    use HasFactory;
    protected $table = 'carrinhos';

    protected $fillable = [
        'user_id',
        'total',
    ];

    // Um item do carrinho pertence a um produto
   // public function produtos()
   // {
    //    return $this->belongsToMany(Produto::class, 'produto_carrinhos')
    //                ->withTimestamps();
    //}
    public function produtos()
    {
        return $this->belongsToMany(Produto::class, 'produto_carrinhos', 'carrinho_id', 'produto_id');
    }


    // Um item do carrinho pertence a um usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

