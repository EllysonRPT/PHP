<!-- resources/views/cadastroTarefas.blade.php -->
@extends('layouts.app')

@section('content')
<h2>@isset($tarefa) Editar Tarefa @else Cadastrar Tarefa @endisset</h2>
<form action="@isset($tarefa) {{ route('tarefas.update', $tarefa->id) }} @else {{ route('tarefas.store') }} @endisset" method="POST">
    @csrf
    @isset($tarefa)
        @method('PUT')
    @endisset
    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <input type="text" id="descricao" name="descricao" class="form-control" value="{{ $tarefa->descricao ?? '' }}" required>
    </div>
    <div class="form-group">
        <label for="setor">Setor:</label>
        <input type="text" id="setor" name="setor" class="form-control" value="{{ $tarefa->setor ?? '' }}" required>
    </div>
    <div class="form-group">
        <label for="prioridade">Prioridade:</label>
        <select id="prioridade" name="prioridade" class="form-control" required>
            <option value="baixa" @selected(isset($tarefa) && $tarefa->prioridade == 'baixa')>Baixa</option>
            <option value="media" @selected(isset($tarefa) && $tarefa->prioridade == 'media')>Média</option>
            <option value="alta" @selected(isset($tarefa) && $tarefa->prioridade == 'alta')>Alta</option>
        </select>
    </div>
    <div class="form-group">
        <label for="user_id">Usuário:</label>
        <select id="user_id" name="user_id" class="form-control" required>
            @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}" @selected(isset($tarefa) && $tarefa->user_id == $usuario->id)>{{ $usuario->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">@isset($tarefa) Atualizar @else Cadastrar @endisset</button>
</form>
@endsection
