@extends('layouts.main')

{{-- Alteração do Titulo Home --}}
@section('title', 'Categorias do Produto')

@section('content')
    <br><br><br><br><br><br><br>
    <h1>Categorias</h1>
    <table>
        <tr>
            <th style="width: 1%;">CÓDIGO PRODUTO</th>
            <th style="width: 7%;">CATEGORIAS</th>
            <th style="width: 50%;">DESCRIÇÕES</th>
            <th>VER DETALHES</th>
            <th>CRIAR PRODUTO</th>
        </tr>
        @foreach ($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->name }}</td>
                <td>{{ $categoria->description }}</td>
                <td><a href="{{ route('produtoCategoria', $categoria->id) }}">Ver Detalhes</a></td>
                <td><a href="{{ route('createProduct', $categoria->id) }}">Criar Produto</a></td>
            </tr>
        @endforeach
    </table>
    <br><br><br><br>

@endsection
