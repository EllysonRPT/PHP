<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class produtoControlle extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produto = produto::all();
        return view("produtos.index", compact("produtos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     return view("produtos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request ->validate([
            'nome' => 'required|max:255',
            'descricao' => 'required|max:255',
            'categoria' => 'required|max:255',
            'quantidade' => 'required|numeric',
            'preco' => 'required|numeric',
           ]      
           );
         produto::create($request ->all());
         return redirect()->route('produtos.index')
           ->with("success","Produto Criado"); //
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produto $produto)
    { 
        return view("produto.edit", compact("produto"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, produto $produto)
    {
        $request ->validate([
         'nome' => 'required',
         'descrisao' => 'required',
         'categoria' => 'required',
         'preco' => 'required',
         'quantidade' => 'required',
        ]      
        );
      $produto->update($request ->all());
      return redirect()->route('produtos.index')
        ->with("success","Produto Atualizado");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produto $produto)
    {
        $produto->delete();

        return redirect()->route('produtos.index')
        ->with("success","Produto Deletado");
    }
}
