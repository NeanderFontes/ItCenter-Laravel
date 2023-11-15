@extends('layouts.main')

@section('content')
    <!-- Inclui a seção de conteúdo na layout 'main'. -->
    <div class="container">

        <!-- Título da página -->
        <h1>Todos os Utilizadores</h1>

        <!-- Tabela para exibir os usuários -->
        <table class="table">
            <thead>
                <!-- Cabeçalho da tabela -->
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Morada</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop através dos usuários para preencher a tabela -->
                @foreach ($users as $user)
                    <tr>
                        <!-- ID do usuário -->
                        <th scope="row">{{ $user->id }}</th>

                        <!-- Nome, morada, email, password do usuário -->
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>

                        <!-- Links para ver e apagar o usuário -->
                        <td>
                            <a href="{{ route('users.view', $user->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('users.delete', $user->id) }}" type="button" class="btn btn-danger">Apagar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
