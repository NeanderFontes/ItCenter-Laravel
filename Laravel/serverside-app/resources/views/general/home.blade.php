@extends('layouts.main')

@section('content')

    <h1>Teste de View em Laravel</h1>

    <ul>
        <!-- Rota para "all_users.blade.php -->
        <a href="{{ route('users.all') }}"><li>Todos os Utilizadores</li></a>
        <!-- Rota para "add_users.blade.php -->
        <a href="{{ route('users.add') }}"><li>Olá, aqui podes Adicionar Utilizadores</li></a>
        <!-- Rota para Todas as Tarefas "todas_tarefas.blade.php -->
        <a href="{{ route('tasks.all_tasks') }}"><li>Todas as tarefas</li></a>
    </ul>

    {{ $hello }}
    <br><br>
    <h1>Query Id 2:</h1>
    <ul>
        <li>Name: {{ $user->name }}</li>
        <li>Passowrd: {{ $user->password }}</li>
        <li>Address: {{ $user->address }}</li>
    </ul>

    <br><br>
    <h1>Query ForEach dos dados da tabela 'users'</h1>
    @foreach ($allusers as $item)
    <tr>
        <td>{{ $item->id }} - </td>
        <td>{{ $item->name }} - </td>
        <td>{{ $item->email }} -</td>
        <td>{{ $item->address }} -</td>
        <td>{{ $item->password }} <br></td>
    </tr>
    @endforeach

@endsection