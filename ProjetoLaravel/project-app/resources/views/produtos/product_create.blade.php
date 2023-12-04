@extends('layouts.main')

{{-- Alteração do Titulo Home --}}
@section('title', 'Produtos')

@section('content')
    <br><br><br><br><br><br><br><!-- Formulário para adicionar ou atualizar usuários -->
    <div class="container">
        <h1>Colocar Categoria do Produtos TESTE POST</h1>
        <br><br>


        <form method="POST" action="{{ route('createProduct') }}">
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Novo Produto: </label>
                <input type="number" hidden value="{{ $id }}" name="idCategory">
                <input type="text" class="form-control" id="nameProducts" name="nameProducts">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Preço</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <button style="background-color: #0DCAF0" type="submit" class="btn btn-primary">Adicionar Produto</button>
        </form>
    </div>


    <br><br><br><br>

@endsection
