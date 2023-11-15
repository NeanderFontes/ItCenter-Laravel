@extends('layouts.main')

@section('content')
    <!-- Inclui a seção de conteúdo na layout 'main'. -->
    <div class="container">

        <!-- Verifica se um usuário está definido para determinar se é uma atualização ou adição -->
        @if (isset($user))
            <h2>Update dos utilizador {{ $user->name }}</h2>
        @else
            <h2>Adicionar utilizadores</h2>
        @endif

        <!-- Formulário para adicionar ou atualizar usuários -->
        <form method="POST" action="{{ route('users.store') }}">
            @csrf

            <!-- Campo oculto para o ID do usuário (usado apenas para atualização) -->
            <input type="hidden" name="user_id" value="{{ isset($user) ? $user->id : null }}">

            <!-- Campo para o nome do usuário -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input name="name" value="{{ isset($user) ? $user->name : '' }}" type="text" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp" required>
                @error('name')
                    Pf coloque um nome
                @enderror
            </div>

            <!-- Campo para o endereço de e-mail do usuário -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input @if (isset($user)) disabled @endif name="email"
                    value="{{ isset($user) ? $user->email : '' }}" type="email" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp" required>
                @error('email')
                    <div class="invalid-feedback"> Pf coloque um email</div>
                @enderror
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <!-- Campo para a senha do usuário -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" value="{{ isset($user) ? $user->password : '' }}" type="password"
                    class="form-control" id="exampleInputPassword1" required>
                @error('password')
                    <div class="alert-danger">
                        Pelo menos 8 caracteres
                    </div>
                @enderror
            </div>

            <!-- Campo adicional para o endereço (apenas se for uma atualização) -->
            @if (isset($user))
                <div class="mb-3">
                    <label for="address" class="form-label">Morada</label>
                    <input name="address" value="{{ isset($user) ? $user->address : '' }}" type="text"
                        class="form-control">
                </div>
            @endif

            <!-- Botão de envio do formulário -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
