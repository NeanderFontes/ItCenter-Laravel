@extends('layouts.main')

{{-- Alteração do Titulo Home --}}
@section('title', 'Developer')

<h1>Desenvolvedor Laravel</h1>
<div class="container">
    {{-- Manipulação da variável declarada no DeveloperController --}}
    <br><br><br>
    <p>Autor: {{ $contactInfo['nome'] }}.</p>
    <p>Idade: {{ $contactInfo['idade'] }} anos.</p>
    <p>Profissão: {{ $contactInfo['profissao'] }}.</p>
    <p>Cidade onde Vive: {{ $contactInfo['cidade'] }}.</p>
</div>

{{-- Manipulação Laravel dos valores declarados no DeveloperController --}}
{{-- ForEach --}}
{{-- @foreach ($contacts as $contactsList)
    <tr>
        <br>
        <td>{{ $contactsList['id'] }} - </td>
        <td>{{ $contactsList['nome'] }} -</td>
        <td>{{ $contactsList['cidade'] }}</td>
    </tr>
@endforeach --}}
<br><br>

@section('content')

@endsection
