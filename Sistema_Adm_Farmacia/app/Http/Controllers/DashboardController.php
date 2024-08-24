<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the dashboard page with a list of products, optionally filtered by search.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Obtém o valor do parâmetro de busca da requisição
        $search = $request->input('search');

        // Consulta produtos com base no parâmetro de busca, se fornecido
        $produtos = Produto::when($search, function ($query, $search) {
            return $query->where('nome', 'like', "%{$search}%")
                         ->orWhere('descricao', 'like', "%{$search}%")
                         ->orWhere('categoria', 'like', "%{$search}%");
        })->get();

        // Retorna a view do dashboard com a lista de produtos (filtrados ou não)
        return view("user.dashboard", compact('produtos'));
    }
}
