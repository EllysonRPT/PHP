<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Os atributos que podem ser preenchidos em massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',     // Nome do usuário
        'email',    // E-mail do usuário
        'password', // Senha do usuário
    ];

    /**
     * Os atributos que devem ser ocultados na serialização.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',        // Senha do usuário
        'remember_token',  // Token de lembrar para sessões
    ];

    /**
     * Os atributos que devem ser convertidos para tipos nativos.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime', // Converte para o tipo DateTime
            'password' => 'hashed',           // Converte para o tipo hashed
        ];
    }

    /**
     * Verifica se o usuário é um farmacêutico.
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->tipo_usuario === 'farmaceutico';
    }

    /**
     * Verifica se o usuário é um cliente.
     *
     * @return bool
     */
    public function isClient()
    {
        return $this->tipo_usuario === 'cliente';
    }
}
