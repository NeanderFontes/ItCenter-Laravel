@extends('layouts.main')

@section('content')
    <h1>Rota para Atualizar a Password</h1>
    <div class="container">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Recuperar Senha</button>
        </form>
    </div>
@endsection
