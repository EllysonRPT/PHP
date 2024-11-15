<?php
// routes/web.php

use App\Http\Controllers\TarefasController;
use App\Http\Controllers\UserController; // Alteração para UserController
use Illuminate\Support\Facades\Route;

// Página inicial
Route::get('', [TarefasController::class, 'index'])->name('home');

// Rotas para Tarefas
Route::resource('tarefas', TarefasController::class);

// Rotas para Usuários (agora UserController)
Route::resource('usuarios', UserController::class);

// Rota para o formulário de cadastro de usuário
Route::get('usuarios/create', [UserController::class, 'create'])->name('usuarios.create');
