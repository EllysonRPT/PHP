<?php
// app/Http/Controllers/TarefasController.php

namespace App\Http\Controllers;

use App\Models\Tarefa;  // Importe o modelo Tarefa
use App\Models\User;    // Importe o modelo User
use Illuminate\Http\Request;

class TarefasController extends Controller
{
    /**
     * Mostrar o formulário de criação de tarefa.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Recupera todos os usuários para vincular a tarefa a um usuário
        $usuarios = User::all();
        return view('cadastroTarefas', compact('usuarios'));
    }

    /**
     * Armazenar uma nova tarefa no banco de dados.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required',
            'setor' => 'required',
            'prioridade' => 'required',
            'status' => 'required',
            'usuario_id' => 'required|exists:users,id',
        ]);

        // Cria uma nova tarefa
        Tarefa::create([
            'descricao' => $request->descricao,
            'setor' => $request->setor,
            'prioridade' => $request->prioridade,
            'status' => $request->status,
            'usuario_id' => $request->usuario_id,
        ]);

        return redirect()->route('tarefas.index')->with('success', 'Tarefa cadastrada com sucesso!');
    }

    // Outros métodos como index, show, update, destroy, etc. podem ser adicionados conforme necessário.
}
