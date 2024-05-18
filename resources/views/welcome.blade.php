@extends('layouts.app')

@section('title', 'Página Inicial')

@section('content')
   <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img id="banner-desktop" class="d-none d-md-block w-100" src="/img/banners/banner-site-desktop.jpg"
                    alt="...">
                <img id="banner-mobile" class="d-md-none d-block w-100" src="/img/banners/banner-site-mobile.jpg" alt="...">
            </div>
            <div class="carousel-item">
                <img class="d-none d-md-block w-100" src="/img/banners/banner-site-desktop-2.jpg" alt="...">
                <img id="banner-mobile" class="d-md-none d-block w-100" src="/img/banners/banner-site-mobile-2.jpg"
                    alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container bg-warning py-1"></div>
    
    <div class="container">
    
        <h2 class="text-center mt-5 mb-5">Nossos Produtos</h2>
    
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0 ">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <a href="/produtos/furadeira-parafusadeira-sem-fio-pfh012i.php"
                            class="link-offset-2 link-underline link-underline-opacity-0 text-white">
                            <div class="row">
    
                                <div class="col d-flex flex-column justify-content-center">
                                    <div><span class="fw-bold fs-2">PFH012i</span></div>
                                    <div><span>Furadeira/Parafusadeira Sem fio</span></div>
                                </div>
                                <div class="col">
                                    <div><img class="img-fluid" src="/img/produtos/PFV012i.png" alt=""></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3 mb-sm-0 ">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <a href="/produtos/esmerilhadeira-angular-5-herz-eah715.php"
                            class="link-offset-2 link-underline link-underline-opacity-0 text-white">
                            <div class="row">
                                <div class="col d-flex flex-column justify-content-center">
                                    <div><span class="fw-bold fs-2">EAH715</span></div>
                                    <div><span>Esmerilhadeira Angular de 5"</span></div>
                                </div>
                                <div class="col">
                                    <div><img class="img-fluid" src="/img/produtos/EAH715.png" alt=""></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row mt-sm-0 mt-md-3">
            <div class="col-sm-6 mb-3 mb-sm-0 ">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <a href="/produtos/furadeira-com-impacto-850w-herz-fih850.php"
                            class="link-offset-2 link-underline link-underline-opacity-0 text-white">
                            <div class="row">
                                <div class="col d-flex flex-column justify-content-center">
                                    <div><span class="fw-bold fs-2">FIH850</span></div>
                                    <div><span>Furadeira Com Função Impacto</span></div>
                                </div>
                                <div class="col">
                                    <div><img class="img-fluid" src="/img/produtos/FIH850.png" alt=""></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3 mb-sm-0 ">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <a href="/produtos/soprador-termico-2000w-2-temperaturas-herz-sth200.php"
                            class="link-offset-2 link-underline link-underline-opacity-0 text-white">
                            <div class="row">
                                <div class="col d-flex flex-column justify-content-center">
                                    <div><span class="fw-bold fs-2">STH200</span></div>
                                    <div><span>Soprador Térmico 2 Temperaturas</span></div>
                                </div>
                                <div class="col">
                                    <div><img class="img-fluid" src="/img/produtos/STH200.png" alt=""></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
@endsection