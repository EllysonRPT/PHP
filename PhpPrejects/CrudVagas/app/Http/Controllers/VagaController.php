<?php

namespace App\Models\Vaga;
namespace App\Http\Controllers;

use App\Models\vaga;
use Illuminate\Http\Request;

class VagaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vagas = vaga:: all();
        return view("vagas.index", compact('vagas'));
        //
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('vagas.create'); //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request -> validate([
            'titulo' =>'required',
            'descricao' =>'required',
            'setor' =>'required',
            'remuneracao' =>'required|numeric',
            'empresa' =>'required',
        ]);
        vaga::create($request ->all());
        return redirect()->route('vagas.index')
                ->with('success', 'Vags CLT criado com sucesso.');

    }

    /**
     * Display the specified resource.
     */
    public function show(vaga $vaga)
    {
return view('vagas.show', compact('vaga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vaga $vaga)
    {
        return view('vagas.edit', compact('vaga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vaga $vaga)
    {
        $request -> validate([
            'titulo' =>'required',
            'descricao' =>'required',
            'setor' =>'required',
            'remuneracao' =>'required|numeric',
            'empresa' =>'required',
        ]);
        $vaga->update($request ->all());
        return redirect()->route('vagas.index')
                         ->with('success', 'Vags CLT atualizada com sucesso.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( vaga $vaga)
    {
$vaga->delete();
return redirect()->route('vagas.index')
 ->with('success', 'Vags deletada com sucesso.');

    }
}