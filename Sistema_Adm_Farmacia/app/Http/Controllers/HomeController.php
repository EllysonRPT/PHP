<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page with a list of products.
     */
    public function index()
    {
        // Obtém os 5 primeiros produtos do banco de dados
        $produtos = Produto::take(5)->get();
        
        // Retorna a view da página inicial com a lista de produtos
        return view("home", compact("produtos"));
    }
}
