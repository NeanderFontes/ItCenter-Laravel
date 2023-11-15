@section('content')
    <!-- Inclui a seção de conteúdo na layout 'main'. -->
    <div class="container">
        <!-- Título da página -->
        <h2>Aqui vês utilizadores</h2>

        <!-- Exibe informações sobre o usuário -->
        <h6>Name: {{ $user->name }}</h6>
        <h6>Address: {{ $user->address }}</h6>
        <h6>Password: {{ $user->password }}</h6>
    </div>
@endsection
