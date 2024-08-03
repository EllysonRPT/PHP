<!-- resources/views/produtos.blade.php -->
@extends('layouts.master')

<body>
    @include('components.header')
    <main>
        <h1>Nossos Cursos</h1>
        <div class="container">
            <section>
              <div class="container">
        <h1>Produtos</h1>
        <a href="/cadastro" class="btn btn-primary">Adicionar Produto</a>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->descricao }}</td>
                        <td>{{ $produto->preco }}</td>
                        <td>{{ $produto->quantidade }}</td>
                      
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

            </section>
        </div>
    </main>
    @include('components.footer')
    <script src="{{ asset('app.js') }}"></script>
</body>
</html>
