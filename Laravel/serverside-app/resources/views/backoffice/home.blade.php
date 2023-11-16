@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>BackOffice User {{ Auth::user()->name }}</h1>

        @if (Auth::user()->user_type == 1)
            <div class="alert alert-info">É o Administrador</div>
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home Path</a>
                            {{-- <h3>Login ativo de {{ Auth::user()->name }}</h3> --}}
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    @else
                    @endauth
                </div>
            @endif
        @endif

    </div>
@endsection
