@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Rota para adicionar Utilizadores!!</h1>
        <form method="POST" action="{{ route('users.store') }}">
            {{-- Tokem de Validação --}}
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input name="name" value="{{ isset($user) ? $user->name : '' }}" type="text" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp" required>
                {{-- Resposta para validações de dados inseridos inválido --}}
                @error('name')
                    pf coloque nome
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" value="{{ isset($user) ? $user->email : '' }}" type="email" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp" required>
                {{-- Resposta para validações de dados inseridos inválido --}}
                @error('email')
                    Coloque email valido
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" value="{{ isset($user) ? $user->password : '' }}" type="password"
                    class="form-control" id="exampleInputPassword1" required>
                {{-- Resposta para validações de dados inseridos inválido --}}
                @error('password')
                    <div class="invalid-feedback">
                        Password invalido min 6 caracter
                    </div>
                @enderror
            </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>

    <a href="{{ route('home') }}">Voltar Home</a>
@endsection
