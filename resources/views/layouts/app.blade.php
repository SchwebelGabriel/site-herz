<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ferramentas Herz - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>


<body>
    <a title="Chame a gente no WhatsApp" href="https://wa.me/5541995704516" target="_blank"
        style="position:fixed;bottom:20px;right:30px; z-index:999">
        <svg alt="Logo WhatsApp para direcionar o cliente para contratar nossos serviços"
            enable-background="new 0 0 512 512" width="50" height="50" version="1.1" viewBox="0 0 512 512"
            xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104  l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z"
                fill="#4CAF50"></path>
            <path
                d="m405.02 361.5c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.62-127.46-112.58-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016 0.16 8.576 0.288 7.52 0.32 11.296 0.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744s-7.36 7.68-11.136 12.352c-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z"
                fill="#FAFAFA"></path>
        </svg>
    </a>
    <header class="navbar navbar-expand-lg bd-navbar sticky-top bg-black py-4 justify-content-center">

        <nav class="navbar navbar-expand-lg bg-warning rounded px-2">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img style="height:50px;" class="img-fluid"
                        src="{{asset('/img/SVG/Logo-bg-y.SVG')}}" alt="" srcset=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link link-dark fw-medium me-1 ms-1 rounded " aria-current="page"
                                href="/"><span class="ms-2 ms-md-0">Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-dark fw-medium me-1 ms-1 rounded" href="/produtos"><span
                                    class="ms-2 ms-md-0">Nossos Produtos</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-dark fw-medium me-1 ms-1 rounded" href="/contato"><span
                                    class="ms-2 ms-md-0">Contato</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link link-dark fw-medium me-1 ms-1 rounded" href="/sobre-nos"><span
                                    class="ms-2 ms-md-0">Sobre nós</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link link-dark fw-bold me-1 ms-1 rounded" href="/garantia"><span
                                    class="ms-2 ms-md-0">Garantia</span></a>
                        </li>

                        <li class="nav-item d-flex align-items-center ms-3 ">

                        </li>
                    </ul>
                    <div class="row mt-2 mt-md-0 ">
                        <div class="col-auto ms-3"><a target="_blank"
                                class="link-offset-2 link-underline link-underline-opacity-0 link-dark"
                                href="https://www.facebook.com/ferramentasherz"><i
                                    class="fi fi-brands-facebook social-ico "></i></a></div>
                        <div class="col-auto"><a target="_blank"
                                class="link-offset-2 link-underline link-underline-opacity-0 link-dark"
                                href="https://www.instagram.com/ferramentasherz/"><i
                                    class="fi fi-brands-instagram social-ico"></i></a></div>

                    </div>
                </div>
            </div>
        </nav>

    </header>

    <div class="container">
        @yield('content')
    </div>

    <div class="container bg-warning py-1 mt-5"></div>
    <footer class="bg-black py-4">
        <div class="container">
            <div class="row justify-content-between text-light align-items-center">
                <div class="col-sm-12 col-md-auto">
                    <div class="row justify-content-start">
                        <div class="row align-items-center">
                            <div class="col-12 col-md">
                                <div class="row justify-content-center me-0 me-md-3">
                                    <img style="width:250px;" src="{{asset('/img/SVG/logo-footer.svg')}}" alt="" srcset="">
                                </div>
                                <div class="row justify-content-center">
                                    <div style="width:32px; height:32px;"
                                        class="me-1 ms-1 col-auto border border-warning rounded-circle align-items-center d-flex justify-content-center">
                                        <a target="_blank"
                                            class="link-offset-2 link-underline link-underline-opacity-0 link-light mt-1"
                                            href="https://www.facebook.com/ferramentasherz"><i
                                                class="fi fi-brands-facebook mt-1"></i></a>
                                    </div>
                                    <div style="width:32px; height:32px;"
                                        class="me-1 ms-1 col-auto border border-warning rounded-circle align-items-center d-flex justify-content-center">
                                        <a target="_blank"
                                            class="link-offset-2 link-underline link-underline-opacity-0 link-light mt-1"
                                            href="https://www.instagram.com/ferramentasherz/"><i
                                                class="fi fi-brands-instagram mt-1"></i></a>
                                    </div>


                                </div>
                            </div>
                            <div class="col-12 col-md-auto ">
                                <div class="row justify-content-center mt-4 mt-md-0">
                                    <div class="col-12 col-md-auto align-items-start me-md-4">
                                        <h5>Institucional</h5>
                                        <ul style="list-style: none;">
                                            <li class="text-secondary"><a
                                                    class="text-secondary link-offset-2 link-underline link-underline-opacity-0"
                                                    href="/contato">Contato</a></li>
                                            <li class="text-secondary"><a
                                                    class="text-secondary link-offset-2 link-underline link-underline-opacity-0"
                                                    href="/sobre-nos">Sobre nós</a></li>
                                            <li class="text-secondary"><a
                                                    class="text-secondary link-offset-2 link-underline link-underline-opacity-0"
                                                    href="/garantia">Garantia</a></li>
                                            <li class="text-secondary"><a
                                                    class="text-secondary link-offset-2 link-underline link-underline-opacity-0"
                                                    href="/pecas">Peças</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-auto align-items-start">
                                        <h5>Lojas Autorizadas</h5>
                                        <ul style="list-style: none;">
                                            <li class="text-secondary">Loja da Ferramenta</li>
                                            <li class="text-secondary">Unimarcas Distribuidora</li>
                                            <li class="text-secondary">Quero revender Herz</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-auto">
                    <hr class="d-block d-md-none">
                    <div class="row justify-content-center text-center">
                        <a href="https://www.unimarcasdistribuidora.com.br/"><img style="width:80px;"
                                src="{{asset('/img/logo-Unimarcas.png')}}" alt="" srcset=""></a>
                    </div>
                </div>
            </div>
    </footer>
</body>

</html>