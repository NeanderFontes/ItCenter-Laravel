@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Aqui vês utilizadores</h2>

    <h6>Name: {{ $user->name }}</h6>
    <h6>Address:{{ $user->address }}</h6>
    <h6>Pasword:{{ $user->password }}</h6>
</div>
    <a href="{{ route('home') }}">Voltar Home</a>
@endsection