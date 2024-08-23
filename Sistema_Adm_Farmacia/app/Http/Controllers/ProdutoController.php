<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view("produtos.index", compact("produtos"));
    }
    public function create()
    {
        return view('produtos.create');
    }
    public function store(Request $request)
{
    $messages = [
        'nome.required' => 'O campo nome é obrigatório.',
        'nome.unique' => 'O nome já existe.',
        'preco.numeric' => 'Apenas Número',
        'quantidade.numeric' => 'Apenas Número',
    ];

    $request->validate([
        'nome' => 'required|string|unique:produtos',
        'descricao' => 'required|max:510',
        'categoria' => 'required|string',
        'preco' => 'required|numeric',
        'quantidade' => 'required|numeric',
        'img' => 'nullable|image|max:2048', // Validação da imagem
    ]);

    // Processando o upload da imagem
    if ($request->hasFile('img')) {
        $imageName = time().'.'.$request->img->extension();
        $request->img->move(public_path('images'), $imageName);
        $request['img'] = $imageName; // Armazenando o nome da imagem no request
    }

    Produto::create($request->all());
    return redirect()->route('produtos.index')
        ->with('success', 'Remédio Adicionado com sucesso');
}

    public function edit(Produto $produto)
    {
        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, Produto $produto)
    {
        $messages = [
            'nome.required' => 'O campo nome é obrigatório.',
            'preco.numeric' => 'Apenas Número',
            'quantidade.numeric' => 'Apenas Número',
        ];

        $request->validate([

            'nome' => 'required|string',
            'descricao' => 'required|max:510',
            'categoria' => 'required|string',
            'preco' => 'required|numeric',
            'quantidade' => 'required|numeric',

        ]);
        $produto->update($request->all());
        return redirect()->route('produtos.index')
            ->with('success', 'Remedio Atualizado Com sucesso');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produtos.index')
            ->with('success', 'Produto Deletado com Sucesso');
    }
    public function show(Produto $produto)
    {
        return view('produtos.show', compact('produto'));
    }
}
