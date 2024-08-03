<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/produtos', [ProdutoController::class, 'index']);

Route::get('/contato', function () {
    return view('contato');
});

Route::post('/contato', function (Request $request) {
    // Lógica para lidar com o formulário de contato
    $name = $request->input('name');
    $email = $request->input('email');
    $message = $request->input('message');

    // Aqui você pode enviar o e-mail, salvar no banco de dados, etc.

    return back()->with('success', 'Mensagem enviada com sucesso!');
});

// Rota para exibir o formulário de cadastro e processar a submissão
Route::match(['get', 'post'], '/cadastro', [ProdutoController::class, 'create']);
