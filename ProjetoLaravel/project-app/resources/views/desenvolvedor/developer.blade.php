@extends('layouts.main')

{{-- Alteração do Titulo Home --}}
@section('title', 'Developer')

<h1>Desenvolvedor Laravel</h1>

{{-- Manipulação da variável declarada no DeveloperController --}}
<br><br><br>
<p>Autor: {{ $nome }}.</p>
<p>Idade: {{ $idade }} anos.</p>
<p>Profissão: {{ $profissao }}.</p>
<p>Cidade onde Vive: {{ $cidade }}.</p>

{{-- Manipulação Laravel dos valores declarados no DeveloperController --}}
{{-- ForEach --}}
@foreach ($arr as $nomesArr)
    <p>Posição do Indice {{ $loop->index }} - {{ $nomesArr }}</p>
@endforeach
<a href="{{ '/' }}">Página Principal</a>

@section('content')

@endsection
