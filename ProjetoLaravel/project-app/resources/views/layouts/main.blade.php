<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Link Fiveicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/DevSoft_TrabalhoPratico/Imagens/srbatata.ico">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Boostratp Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Google Fonts - Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,300;0,700;1,400&display=swap"
        rel="stylesheet">

    <!-- Link ficheiro CSS public/css -->
    <link rel="stylesheet" href="/css/styles.css">

    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>


</head>

<body>
    {{-- layout content --}}
    @yield('content')

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg fixed-top bg-primary-color" id="navbar">
        <div class="container py-3">
            <a href="#" class="navbar-brand">
                <img src="/DevSoft_TrabalhoPratico/Imagens/Srbatata.png" alt="SrBatata">
                <span>SrBatata</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-items"
                aria-controls="navbar-items" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbar-items">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{ route('welcome') }}" class="nav-link active primary-color" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('produtos.product') }}"
                            class="nav-link primary-color">Sabores</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('welcome') }}" class="nav-link primary-color">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('desenvolvedor.developer') }}" class="nav-link primary-color">Desenvolvedor</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <footer class="container-fluid bg-dark-color" id="footer">
        <div class="container">
            <div class="row">
                <!-- FOOTER TOP -->
                <div class="col-12" id="footer-top">
                    <div class="row justify-content-between">
                        <div class="col-4">
                            <h2>
                                SrBatata
                            </h2>
                        </div>
                        <div class="col-4" id="social-icons">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-youtube"></i>
                            <i class="bi bi-twitter"></i>
                        </div>
                    </div>
                </div>
                <!-- FOOTER DETAILS -->
                <div class="col-12" id="footer-details">
                    <div class="row">
                        <div class="col-12 col-md-4" id="news-container">
                            <h4>Fique por dentro das novidades</h4>
                            <p class="secondary-color">
                                Inscreva-se para saber em primeira mão
                            </p>
                            <form>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Digite o seu e-mail" />
                                </div>
                                <button class="btn btn-dark">Inscrever</button>
                            </form>
                        </div>
                        <div class="col-12 col-md-4" id="contact-container">
                            <h4>Formas de contato</h4>
                            <p class="secondary-color">(+351)999-999-999</p>
                            <p class="secondary-color">contato@srbatata.com</p>
                        </div>
                        <div class="col-12 col-md-4" id="links-container">
                            <div class="row">
                                <h4>Você pode estar buscando por:</h4>
                                <div class="col-6">
                                    <ul class="list-unstyled">
                                        <li><a href="#" class="secondary-color">Sabores</a></li>
                                        <li><a href="#" class="secondary-color">Localização</a></li>
                                        <li><a href="#" class="secondary-color">Vendas</a></li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="list-unstyled">
                                        <li><a href="#" class="secondary-color">Franquia</a></li>
                                        <li>
                                            <a href="#" class="secondary-color">Trabalhe conosco</a>
                                        </li>
                                        <li><a href="#" class="secondary-color">Contato</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FOOTER BOTTOM -->
                <div class="col-12" id="footer-bottom">
                    <div class="row justify-content-between">
                        <div class="col-12 col-md-3">
                            <p class="secondary-color">SrBatata &copy; 2023</p>
                        </div>
                        <div class="col-12 col-md-3">
                            <p class="secondary-color">
                                Realizamos o seu desejo com
                                <i class="bi bi-heart"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
