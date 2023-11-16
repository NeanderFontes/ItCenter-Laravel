@extends('layouts.app')

@section('content')
    <h1>Adicionar Novo Gift</h1>

    {{-- Formulário para adicionar nova prenda --}}
    <form method="post" action="{{ route('gifts.store') }}">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name" required>

        <label for="estimated_cost">Custo Estimado:</label>
        <input type="number" name="estimated_cost" required>

        <button type="submit">Adicionar Prenda</button>
    </form>
@endsection
