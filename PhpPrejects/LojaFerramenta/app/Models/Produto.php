<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    use HasFactory;
   protected $fillables = [
        'nome',
        'descricao',
        'categoria',
        'preco',
        'quantidade',
        'img',
    ];
}
