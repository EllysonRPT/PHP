<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefas extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'descricao',
        'setor',
        'prioridade',
        'status',
        'data_cadastro',
    ];

    /**
     * Get the user that owns the task.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'data_cadastro' => 'datetime', // Caso precise formatar a data para um tipo específico.
    ];
}
