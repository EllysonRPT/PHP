<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdutoController;
use App\Http\Middleware\ProdutosMiddleware;

// Página do manual de usuário
Route::get('/manual', function () {
    return view('manual');
});

// Página sobre a farmácia
Route::get('/sobre', function () {
    return view('sobre');
});

// Página de ajuda
Route::get('/ajuda', function () {
    return view('ajuda');
});

// Página inicial, onde exibe os produtos destacados
Route::get('', [HomeController::class, 'index'])->name('home');

// Formulário para exibição do registro de usuário
Route::get('/registro', [UserController::class, 'showRegistroForm'])->name('user.registro');

// Rota para processar o registro de novo usuário
Route::post('/registro', [UserController::class, 'registro'])->name('user.register');

// Formulário para exibição do login
Route::get('/login', [UserController::class, 'showLoginForm'])->name('user.login');

// Rota para processar o login do usuário
Route::post('/login', [UserController::class, 'login'])->name('user.login');

// Rota para o logout do usuário
Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');

// Dashboard do usuário, protegido por autenticação
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

// Rotas para CRUD de produtos, usando ProdutoController
Route::resource('produtos', ProdutoController::class)
    ->middleware(ProdutosMiddleware::class)
    ->except('show');

// Rota para visualização de um produto específico, protegida por autenticação
Route::get('produtos/{produto}', [ProdutoController::class, 'show'])
    ->middleware('auth')
    ->name('produtos.show');

// Rota para adicionar produto ao carrinho, protegida por autenticação
Route::post('carrinho/add/{produto}', [CarrinhoController::class, 'add'])
    ->middleware('auth')
    ->name('carrinho.add');
