@extends('layouts.app')

@section('content')
    <h1>Editar Gifts</h1>

    {{-- Formulário para editar a prenda --}}
    <form method="post" action="{{ route('gifts.update', ['id' => $gift->id]) }}">
        @csrf
        @method('put')

        <label for="name">Nome:</label>
        <input type="text" name="name" value="{{ $gift->name }}" required>

        <label for="estimated_cost">Custo Estimado:</label>
        <input type="number" name="estimated_cost" value="{{ $gift->estimated_cost }}" required>

        <button type="submit">Atualizar Prenda</button>
    </form>
@endsection
