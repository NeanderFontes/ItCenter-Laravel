@extends('layouts.main')

@section('content')
    <!-- Container principal -->
    <div class="container">

        <!-- Título da página -->
        <h1>Adicionar Tarefas</h1>

        <!-- Formulário para adicionar tarefas -->
        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf

            <!-- Campo para o nome da tarefa -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input name="name" value="" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" required>
                @error('name')
                    Erro Adicione nome
                @enderror
            </div>

            <!-- Campo para a descrição da tarefa -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descrição</label>
                <input name="description" value="" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" required>
                @error('description')
                    Erro falta email
                @enderror
            </div>

            <!-- Campo para selecionar um usuário associado à tarefa -->
            <div>
                <label for="pet-select">Selecione um utilizador:</label>
                <select name="user_id">
                    <option value="">--Please choose an option--</option>

                    <!-- Loop para exibir opções de usuários -->
                    @foreach ($users as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach

                </select>
            </div>

            <!-- Botão de envio do formulário -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
