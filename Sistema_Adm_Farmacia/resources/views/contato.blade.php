@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="my-4">Contato</h1>
    
    <p>Se você tiver alguma dúvida ou precisar de mais informações, entre em contato conosco através do formulário abaixo:</p>

    <form action="{{ route('contato.submit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="mensagem">Mensagem:</label>
            <textarea name="mensagem" class="form-control" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Enviar</button>
    </form>
</div>
@endsection
