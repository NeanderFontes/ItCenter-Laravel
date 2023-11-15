@extends('layouts.main')

@section('content')
    <div class=" container">
        <h2>Home</h2>

        <ul>
            <a href="{{ route('users.all') }}">
                <li>Todos os Utilizadores</li>
            </a>
            <a href="{{ route('users.add') }}">
                <li>Adicionar Utilizador</li>
            </a>
            <a href="{{ route('tasks.all') }}">
                <li>Todas as Tarefas</li>
            </a>
        </ul>
        {{-- {{ $hello }} --}}
        <ul>
            @foreach ($weekDays as $day)
                <li> {{ $day }}</li>
            @endforeach
        </ul>
    </div>
@endsection
