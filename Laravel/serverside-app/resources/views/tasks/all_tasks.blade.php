@extends('layouts.main')

@section('content')

    <!-- Container para a tabela -->
    <div class="container">
        <!-- Título da página -->
        <h1>Todas as tarefas</h1>
        
        <!-- Tabela para exibir as tarefas -->
        <table class="table">
            <thead>
                <!-- Cabeçalho da tabela -->
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Data de Conclusão</th>
                    <th scope="col">Pessoa Responsável</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop através das tarefas para preencher a tabela -->
                @foreach ($tasks as $item)
                    <tr>
                        <!-- ID da tarefa -->
                        <th scope="row">{{ $item->id }}</th>

                        <!-- Nome, estado, data de conclusão, pessoa responsável da tarefa -->
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->due_at }}</td>
                        <td>{{ $item->resname }}</td>

                        <!-- Links para ver e apagar a tarefa -->
                        <td>
                            <a href="{{ route('tasks.view', $item->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('tasks.delete', $item->id) }}" type="button" class="btn btn-danger">Apagar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
