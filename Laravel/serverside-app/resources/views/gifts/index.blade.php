@extends('layouts.app')

@section('content')
    <h1>Lista de Gifts</h1>

    @if(count($gifts) > 0)
        <ul>
            @foreach($gifts as $gift)
                <li>{{ $gift->name }} - Estimado: ${{ $gift->estimated_cost }}</li>
            @endforeach
        </ul>
    @else
        <p>Nenhum gift encontrado.</p>
    @endif
@endsection
