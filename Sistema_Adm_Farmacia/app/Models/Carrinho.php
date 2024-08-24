<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    use HasFactory;

    // Define os atributos que podem ser preenchidos em massa
    protected $fillable = [
        'id_produto',   // ID do produto no carrinho
        'id_user',      // ID do usuário que adicionou o produto ao carrinho
        'quantidade',   // Quantidade do produto no carrinho
        'status'        // Status do item no carrinho (por exemplo, 'pendente', 'comprado')
    ];
}
