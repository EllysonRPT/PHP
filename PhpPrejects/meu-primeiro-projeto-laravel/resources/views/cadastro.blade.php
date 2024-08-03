@extends('layouts.master')

<body>
    @include('components.header')
    <main>
        <h1>Cadastro de Produto</h1>
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="/cadastro" method="POST">
                @csrf
                <label for="id">ID:</label>
                <input type="text" id="id" name="id" required>
                
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="description">Descrição:</label>
                <textarea id="description" name="description" rows="4" required></textarea>
                
                <label for="price">Preço:</label>
                <input type="number" step="0.01" id="price" name="price" required>
                
                <label for="quantity">Quantidade:</label>
                <input type="number" id="quantity" name="quantity" required>
                
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </main>
    @include('components.footer')
    <script src="{{ asset('app.js') }}"></script>
</body>
</html>
