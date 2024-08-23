@extends('layouts.app')

@section('content')
<div class="container mt-5"> <!-- Adicionando margem no topo -->
    <h1 class="my-4">Dashboard de Produtos</h1>

    <!-- Formulário de pesquisa -->
    <form method="GET" action="{{ route('dashboard') }}" class="mb-4">
        <input type="text" name="search" placeholder="Pesquisar produtos..." value="{{ request('search') }}" class="form-control">
        <button type="submit" class="btn btn-primary mt-2">Pesquisar</button>
    </form>

    <!-- Lista de produtos -->
    <div class="row">
        @foreach ($produtos as $produto)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('img/' . $produto->img) }}" class="img-fluid" alt="{{ $produto->nome }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $produto->nome }}</h5>
                        <p class="card-text">{{ $produto->descricao }}</p>
                        <p class="card-text">{{ $produto->categoria }}</p>
                        <p class="card-text">Preço: R$ {{ $produto->preco }}</p>
                        <a href="{{ route('produtos.show', $produto->id) }}" class="btn btn-primary">Ver Produto</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
