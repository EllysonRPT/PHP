<?php
// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Método para mostrar o formulário de cadastro
    public function create()
    {
        return view('cadastroUsuario');  // Retorna a view cadastroUsuario.blade.php
    }

    // Método para armazenar os dados do usuário no banco de dados
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('usuarios.index')->with('success', 'Usuário cadastrado com sucesso!');
    }
}
