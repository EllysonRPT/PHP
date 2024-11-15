<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gerenciamento de Tarefas</h1>

    <div class="row">
        <!-- Coluna "A Fazer" -->
        <div class="col">
            <h3>A Fazer</h3>
            <div class="list-group">
                @foreach($tarefasAFAzer as $tarefa)
                    <div class="list-group-item">
                        <h5>{{ $tarefa->descricao }}</h5>
                        <p>Setor: {{ $tarefa->setor }}</p>
                        <p>Prioridade: {{ ucfirst($tarefa->prioridade) }}</p>
                        <p>Usuário: {{ $tarefa->usuario->name }}</p>
                        <p>Status: {{ ucfirst($tarefa->status) }}</p>

                        <!-- Formulário para editar o status da tarefa -->
                        <form action="{{ route('tarefas.update', $tarefa->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="status">Status:</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="a fazer" {{ $tarefa->status === 'a fazer' ? 'selected' : '' }}>A Fazer</option>
                                    <option value="fazendo" {{ $tarefa->status === 'fazendo' ? 'selected' : '' }}>Fazendo</option>
                                    <option value="pronto" {{ $tarefa->status === 'pronto' ? 'selected' : '' }}>Pronto</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </form>

                        <!-- Botão para excluir a tarefa -->
                        <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST" class="mt-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta tarefa?')">Excluir</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Coluna "Fazendo" -->
        <div class="col">
            <h3>Fazendo</h3>
            <div class="list-group">
                @foreach($tarefasFazendo as $tarefa)
                    <div class="list-group-item">
                        <h5>{{ $tarefa->descricao }}</h5>
                        <p>Setor: {{ $tarefa->setor }}</p>
                        <p>Prioridade: {{ ucfirst($tarefa->prioridade) }}</p>
                        <p>Usuário: {{ $tarefa->usuario->name }}</p>
                        <p>Status: {{ ucfirst($tarefa->status) }}</p>

                        <form action="{{ route('tarefas.update', $tarefa->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="status">Status:</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="a fazer" {{ $tarefa->status === 'a fazer' ? 'selected' : '' }}>A Fazer</option>
                                    <option value="fazendo" {{ $tarefa->status === 'fazendo' ? 'selected' : '' }}>Fazendo</option>
                                    <option value="pronto" {{ $tarefa->status === 'pronto' ? 'selected' : '' }}>Pronto</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </form>

                        <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST" class="mt-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta tarefa?')">Excluir</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Coluna "Pronto" -->
        <div class="col">
            <h3>Pronto</h3>
            <div class="list-group">
                @foreach($tarefasPronto as $tarefa)
                    <div class="list-group-item">
                        <h5>{{ $tarefa->descricao }}</h5>
                        <p>Setor: {{ $tarefa->setor }}</p>
                        <p>Prioridade: {{ ucfirst($tarefa->prioridade) }}</p>
                        <p>Usuário: {{ $tarefa->usuario->name }}</p>
                        <p>Status: {{ ucfirst($tarefa->status) }}</p>

                        <form action="{{ route('tarefas.update', $tarefa->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="status">Status:</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="a fazer" {{ $tarefa->status === 'a fazer' ? 'selected' : '' }}>A Fazer</option>
                                    <option value="fazendo" {{ $tarefa->status === 'fazendo' ? 'selected' : '' }}>Fazendo</option>
                                    <option value="pronto" {{ $tarefa->status === 'pronto' ? 'selected' : '' }}>Pronto</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </form>

                        <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST" class="mt-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta tarefa?')">Excluir</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
