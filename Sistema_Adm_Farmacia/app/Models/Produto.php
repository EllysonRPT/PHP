<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    // Define os atributos que podem ser preenchidos em massa
    protected $fillable = [
        'nome',        // Nome do produto
        'descricao',   // Descrição do produto
        'categoria',   // Categoria do produto
        'preco',       // Preço do produto
        'quantidade',  // Quantidade disponível do produto
        'img'          // Nome da imagem do produto
    ];
}
