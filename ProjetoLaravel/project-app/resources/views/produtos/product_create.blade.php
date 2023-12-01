@extends('layouts.main')

{{-- Alteração do Titulo Home --}}
@section('title', 'Produtos')

@section('content')
    <br><br><br><br><br><br><br><!-- Formulário para adicionar ou atualizar usuários -->
    <div class="container">
        <h1>Colocar Categoria do Produtos</h1>
        <br><br>


        <form method="POST" action="{{ route('createProduct') }}">
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Produto: </label>

                <input type="text" class="form-control" id="exampleInputEmail1" name="nameProducts" value="{{ isset ($produtoAtual) ? $produtoAtual->nameProducts : "" }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Preço</label>
                <input type="text" class="form-control" id="exampleInputPassword1" value="{{ isset ($produtoAtual) ? $produtoAtual->price : "" }}">
            </div>
            <button style="background-color: #0DCAF0" type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>


    <br><br><br><br>

@endsection
