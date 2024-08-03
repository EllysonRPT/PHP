<!-- resources/views/contato.blade.php -->
@extends('layouts.master')
<body>
    @include('components.header')
    <main>
        <h1>Contato</h1>
        <div class="container">
            <section>
                <h2>Entre em Contato Conosco</h2>
                <form action="/contato" method="POST">
                    @csrf
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="message">Mensagem:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                    
                    <button type="submit">Enviar</button>
                </form>
            </section>
        </div>
    </main>
    @include('components.footer')
    <script src="{{ asset('app.js') }}"></script>
</body>

