@extends('layouts.main')

{{-- Alteração do Titulo Home --}}
@section('title', 'Sr Batata')


@section('content')
<!-- SLIDER -->
<div class="container" id="slider-container">
    <div id="slider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1">
            </button>
            <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2">
            </button>
            <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/batata1.jpg" class="d-block w-100" alt="Casa 1" />
                <div class="carousel-caption">
                    <h5>Sr Batata</h5>
                    <a href="#" class="btn btn-dark">Nossa Marca</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/batata2.jpg" class="d-block w-100" alt="Casa 2" />
                <div class="carousel-caption">
                    <h5>Batatas Recheadas</h5>
                    <a href="#" class="btn btn-dark">Sabores</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/batata3.jpeg" class="d-block w-100" alt="Casa 3" />
                <div class="carousel-caption">
                    <h5>Não Há Igual!!</h5>
                    <a href="#" class="btn btn-dark">Melhor batata da região</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
            <i class="bi bi-chevron-compact-left"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
            <i class="bi bi-chevron-compact-right"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="col-12 col-md-10 offset-md-1" id="mini-banners">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card text-center">
                    <i class="bi bi-box primary-color"></i>
                    <div class="card-body">
                        <h5 class="card-title primary-color">Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit.</h5>
                        <p class="card-text secondary-color">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <a href="#" class="btn btn-dark">Saber Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card text-center">
                    <i class="bi bi-layers primary-color"></i>
                    <div class="card-body">
                        <h5 class="card-title primary-color">Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit.</h5>
                        <p class="card-text secondary-color">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <a href="#" class="btn btn-dark">Saber Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card text-center">
                    <i class="bi bi-lightning-charge"></i>
                    <div class="card-body primary-color">
                        <h5 class="card-title primary-color">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        </h5>
                        <p class="card-text secondary-color">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <a href="#" class="btn btn-dark">Saber Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- DESTAQUES -->
<div class="container" id="featured-container">
    <div class="col-12">
        <h2 class="title primary-color">Trabalhos em Destaque</h2>
        <p class="subtitle secondary-color">
            Conheça nossos projetos mais desafiadores
        </p>
    </div>
    <div class="col-12" id="featured-images">
        <div class="row g-4">
            <div class="col-12 col-md-4">
                <img src="img/batata4.jpg" alt="Projeto 1" class="img-fluid" />
                <div class="banner-content">
                    <p class="secondary-color">Categoria</p>
                    <h3>Nome do Projeto</h3>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <img src="img/batata5.jpg" alt="Projeto 2" class="img-fluid" />
                <div class="banner-content">
                    <p class="secondary-color">Categoria</p>
                    <h3>Nome do Projeto</h3>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <img src="img/batata6.jpeg" alt="Projeto 3" class="img-fluid" />
                <div class="banner-content">
                    <p class="secondary-color">Categoria</p>
                    <h3>Nome do Projeto</h3>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <img src="img/batata7.jpg" alt="Projeto 4" class="img-fluid" />
                <div class="banner-content">
                    <p class="secondary-color">Categoria</p>
                    <h3>Nome do Projeto</h3>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <img src="img/batata8.jpg" alt="Projeto 5" class="img-fluid" />
                <div class="banner-content">
                    <p class="secondary-color">Categoria</p>
                    <h3>Nome do Projeto</h3>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <img src="img/batata9.jpg" alt="Projeto 6" class="img-fluid" />
                <div class="banner-content">
                    <p class="secondary-color">Categoria</p>
                    <h3>Nome do Projeto</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- INFO -->
<div class="container" id="info-container">
    <div class="col-12">
        <h2 class="title primary-color">Detalhes Importantes</h2>
        <p class="subtitle secondary-color">
            Saiba mais sobre a experiência da nossa incrível equipe
        </p>
    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-12 col-md-5" id="info-banner">
                <img src="img/batata10.jpg" alt="Informações" class="img-fluid" />
            </div>
            <div class="col-12 col-md-7 bg-secondary-color" id="info-content">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title">Estes dados fazem a diferença:</h2>
                        <p class="subtitle secondary-color">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Praesentium tempore fugit et iusto quisquam beatae impedit
                            nobis quas doloribus, atque, ut id similique eligendi, ab
                            soluta magnam maxime cum debitis.
                        </p>
                    </div>
                    <div class="col-12" id="info-numbers">
                        <div class="row">
                            <div class="col-4">
                                <h3 class="primary-color">1</h3>
                                <p class="secondary-color">Ano Recheado de Batata</p>
                            </div>
                            <div class="col-4">
                                <h3 class="primary-color">720</h3>
                                <p class="secondary-color">Mais de 500 Pedidos Entregues</p>
                            </div>
                            <div class="col-4">
                                <h3 class="primary-color">500+</h3>
                                <p class="secondary-color">Clientes com Fome!!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <a class="btn btn-dark">Saber Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
