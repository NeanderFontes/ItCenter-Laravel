@extends('layouts.main')

{{-- Alteração do Titulo Home --}}
@section('title', 'Produtos')

@section('content')
    <br><br><br><br><br><br><br><!-- Formulário para adicionar ou atualizar usuários -->
    <div class="container">
        <h1>Colocar Categoria do Produtos</h1>
        <br><br>

        <!-- Tabela para exibir os usuários -->
        <table class="table">
            <thead>
                <!-- Cabeçalho da tabela -->
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Configurar</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop através dos produtos para preencher a tabela -->
                @foreach ($produtos as $produto)
                    <tr>
                        <!-- ID do usuário -->
                        <th scope="row">{{ $produto->id }}</th>

                        <!-- Nome, morada, email, password do usuário -->
                        <td>{{ $produto->nameProducts }}</td>
                        <td>€ {{ $produto->price }}</td>

                        <!-- Links para ver e apagar o usuário -->
                        <td>
                            <a href="{{ route('produtoUpdate', $produto->id) }}" class="btn btn-info">Update</a>
                            <a href="{{ route('produtoDelete', $produto->id) }}" type="button"
                                class="btn btn-danger">Apagar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <br><br><br><br>

@endsection
