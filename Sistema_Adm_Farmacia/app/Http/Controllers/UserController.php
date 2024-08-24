<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Exibe o formulário de login.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        // Retorna a visão do formulário de login
        return view('user.login');
    }

    /**
     * Realiza o login do usuário.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Valida as credenciais fornecidas pelo usuário
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Tenta autenticar o usuário com as credenciais fornecidas
        if (Auth::guard('web')->attempt($credentials)) {
            // Regenera a sessão do usuário para prevenir ataques de fixation
            $request->session()->regenerate();
            // Redireciona o usuário para o dashboard
            return redirect()->intended('dashboard');
        }

        // Se a autenticação falhar, retorna ao formulário de login com uma mensagem de erro
        return back()->withErrors([
            'email' => 'As credenciais não correspondem aos nossos registros.',
        ])->onlyInput('email');
    }

    /**
     * Exibe o formulário de registro.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistroForm()
    {
        // Retorna a visão do formulário de registro
        return view('user.registro');
    }

    /**
     * Realiza o registro de um novo usuário.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function registro(Request $request)
    {
        // Define mensagens de erro personalizadas para a validação
        $messages = [
            'name.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'Por favor, insira um e-mail válido.',
            'email.unique' => 'Este e-mail já está registrado.',
            'password.required' => 'O campo senha é obrigatório.',
            'password.min' => 'A senha deve ter no mínimo 6 caracteres.',
            'password.confirmed' => 'A confirmação da senha não corresponde.',
        ];

        // Valida os dados do formulário de registro
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ], $messages);

        // Cria um novo usuário com os dados fornecidos
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redireciona o usuário para a página de login após o registro
        return redirect('/login');
    }

    /**
     * Realiza o logout do usuário.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        // Faz o logout do usuário
        Auth::logout();

        // Regenera a sessão para prevenir ataques de fixation
        $request->session()->regenerate();
        // Invalida a sessão do usuário
        $request->session()->invalidate();

        // Redireciona o usuário para a página inicial
        return redirect('/');
    }
}
