<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'cpf',          // cliente
        'cnpj',         // fabricante (se tiver)
        'whatsapp',
        'instagram',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // CLIENTE — favoritos
    public function favoritos()
    {
        return $this->hasMany(Favorito::class, 'user_id');
    }
    // CLIENTE — carrinho
    public function carrinho()
    {
        return $this->hasMany(Carrinho::class);
    }

    // FABRICANTE — produtos
    public function produtos()
    {
        return $this->hasMany(Produto::class, 'fabricante_id');
    }

    // CLIENTE — pedidos
    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }

    public function fabricante()
    {
        return $this->hasOne(Fabricante::class, 'user_id');
    }

}
