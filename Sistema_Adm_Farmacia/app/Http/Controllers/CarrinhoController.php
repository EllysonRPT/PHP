<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarrinhoController extends Controller
{
    /**
     * Add a product to the shopping cart.
     *
     * @param Request $request
     * @param Produto $produto
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add(Request $request, Produto $produto)
    {
        // Valida a quantidade fornecida na requisição
        $dados = $request->validate([
            'quantidade' => 'required|numeric|min:1' // A quantidade deve ser um número e pelo menos 1
        ]);

        // Cria uma nova entrada no carrinho com o produto, o usuário autenticado e a quantidade
        Carrinho::create([
            'id_produto' => $produto->id,  // ID do produto a ser adicionado
            'id_user' => Auth::id(),       // ID do usuário autenticado
            'quantidade' => $request->quantidade // Quantidade do produto
        ]);

        // Redireciona de volta para a página do produto com uma mensagem de sucesso
        return redirect()->route('produtos.show', $produto)->with('success', 'Produto adicionado ao carrinho com sucesso');
    }
}
