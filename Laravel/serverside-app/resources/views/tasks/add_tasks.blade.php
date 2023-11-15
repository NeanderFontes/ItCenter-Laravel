@extends('layouts.main')

@section('content')
    <h1>Todas as Tarefas</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Data de Conclusão</th>
                    <th scope="col">Pessoa Responsável</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->due_at }}</td>
                        <td>{{ $item->resname }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        {{-- Campo para Adicionar nova tarefa --}}
        <ul>
            <a href="">Adicionar Tarefas</a>
        </ul>
    </div>
@endsection
