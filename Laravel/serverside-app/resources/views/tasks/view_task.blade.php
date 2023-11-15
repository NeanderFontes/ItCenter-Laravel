@extends('layouts.main')

@section('content')
    <!-- Inclui a seção de conteúdo na layout 'main'. -->
    <div class="container">

        <!-- Título da página -->
        <h1>Todas as Tarefas</h1>

        <!-- Exibe informações sobre a tarefa -->
        <h6>Name: {{ $task->name }}</h6>
        <h6>Descrição: {{ $task->description }}</h6>
        <h6>Data de Conclusão: {{ $task->due_at }}</h6>
        <h6>Pessoa Responsável: {{ $task->resname }}</h6>
    </div>
@endsection
