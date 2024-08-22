<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showLoginForm()
    {
 return view('user.login') ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password'=> ['required'],
        ]);
    
    if (Auth::guard('web')->attempt($credentials)) {
        $request-> session()->regenerate();
        return redirect()->intended('dashboard');        
    }

    return back()->withErrors([
        'email'=> 'As credenciais Nao corresponde aos nossos regitros',
    ])->onlyInput('email'); 
    }


    public function showRegistroForm()
    {
        return view('user.registro');
    }

    public function registro(Request $request)
    {
        $messages = [
           'name.required' => 'O campo nome é obrigatório.',
           'email.required' => 'O campo e-mail é obrigatório.',
           'email.email' => 'Por favor, insira um e-mail válido.',
           'email.unique' => 'Este e-mail já está registrado.',
           'password.required' => 'O campo senha é obrigatório.',
           'password.min' => 'A senha deve ter no mínimo 6 caracteres.',
           'password.confirmed' => 'A confirmação da senha não corresponde.',
        ];

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect ('/login');

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->regenerate();
        $request->session()->invalidate();

        return redirect('/');
    }
}
