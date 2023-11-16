@extends('layouts.main')

@section('content')
    <h1>Rota para Recuperar Email</h1>
    <div class="container">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Enviar email</button>
        </form>
    </div>
@endsection
