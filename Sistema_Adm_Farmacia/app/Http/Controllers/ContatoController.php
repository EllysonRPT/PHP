<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContatoController extends Controller
{
    public function submit(Request $request)
    {
        // Processar e validar os dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email',
            'mensagem' => 'required|string',
        ]);

        // Enviar email ou armazenar os dados
        // ...

        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
}
