@extends('layouts.main')

{{-- Alteração do Titulo Home --}}
@section('title', 'Produtos')

@section('content')
    <br><br><br><br><br><br><br><!-- Formulário para adicionar ou atualizar usuários -->
    <div class="container">
        <h1>Colocar Categoria do Produtos</h1>
        <br><br>


        <form method="POST" action="{{ isset($produtoAtual) ? route('produtoStore') : route('store') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Produto: </label>
                <!-- Campo oculto para o ID do usuário (usado apenas para atualização) -->
                <input type="hidden" name="id" value="{{ isset($produtoAtual) ? $produtoAtual->id : null }}">

                <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{ isset ($produtoAtual) ? $produtoAtual->nameProducts : "" }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Preço</label>
                <input type="text" class="form-control" id="exampleInputPassword1"
                name="price" value="{{ isset ($produtoAtual) ? $produtoAtual->price : "" }}">
            </div>
            <button style="background-color: #0DCAF0" type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>


    <br><br><br><br>

@endsection
