@extends('layouts.app')


@section('content')

<div class="container">
    <h1 class="my-4">Produtos</h1>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <a class="btn btn-success mb-2" href="{{ route('produtos.create') }}"> Criar Novo Produto</a>


    <table class="table table-bordered">
        <tr>
            <th>N°</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($produtos as $produto)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $produto->nome }}</td>
          
            <td>{{ $produto->categoria}}</td>
            <td>{{ $produto->quantidade}}</td>
            <td>{{ $produto->preco }}</td>
            <td>
                <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST">
                   
                    <a class="btn btn-primary" href="{{ route('produtos.edit', $produto->id) }}">Editar</a>


                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
