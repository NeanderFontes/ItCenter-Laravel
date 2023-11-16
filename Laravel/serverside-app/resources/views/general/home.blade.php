@extends('layouts.main')

@section('content')
    <div class=" container">
        <h2>Home</h2>

        <ul>
            <li>
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ url('/home') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home Path</a>
                                <h3>Login ativo de {{ Auth::user()->name }}</h3>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </li>

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
