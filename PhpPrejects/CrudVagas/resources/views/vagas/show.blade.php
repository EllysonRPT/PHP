@extends('layouts.master')

@section('content')


<div class="container">
    <h1 class="my-4">Detalhes da Vaga</h1>

    <div class="form-group">
        <strong>Titulo:</strong>
        {{ $vagas->titulo }}
    </div>
    <div class="form-group">
        <strong>Setor:</strong>
        {{ $vagas->setor }}
    </div>

    <div class="form-group">
        <strong>Remuneração:</strong>
        {{ $vagas->remuneracao }}
    </div>

    <div class="form-group">
        <strong>Descrição:</strong>
        {{ $vagas->descricao }}
    </div>

    <div class="form-group">
        <strong>Empresa:</strong>
        {{ $vagas->empresa }}
    </div>

    <a class="btn btn-primary" href="{{ route('vagas.index') }}">Voltar</a>
</div>

