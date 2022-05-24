<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nova Cruz Digital</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ url('bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('site/css/main.css') }}">
    <link rel="stylesheet" href="{{ url('partener/css/custom.css') }}">


</head>

<body>
    <!--HEADER-->
    <header class="mb-5">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                <a class="navbar-brand" href="#">
                    <img src="{{ url('site/assets/logo.png') }}" class="img-fluid logo" />
                </a>

                <div class="collapse navbar-collapse menu-list">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('portaldoparceiro') }}">início </a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link">Categorias <i class="bi bi-caret-down"></i></a>
                                <div class="dropdown-content">
                                    <a href="#">Smartphones</a>
                                    <a href="#">Informatica</a>
                                    <a href="#">Automotivo</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Criar Destaques</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}" target="blank">Vitrine digital</a>
                        </li>

                    </ul>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
                    <ul class="navbar-nav itens-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-search"></i></a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                aria-controls="offcanvasRight" href="#"><i class="bi bi-cart"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><i class="bi bi-person"></i></a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--//HEADER-->

    <!--CONTAINER-->
    <div class="container">

        <!--CART-->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Carrinho</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <hr>
                <div class="list-group">
                    <!--ItemCart-->
                    <div class="list-group-item list-group-item-action" aria-current="true">

                        <div class="d-flex w-100 justify-content-between">
                            <div class="imgCart">
                                <img src="{{ asset('site/assets/laptop.jpg') }}" class="" alt="">
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-between mb-1">
                                    <small>Laptop</small>
                                    <button type="button" class="btn-close" aria-label="Close"></button>
                                </div>

                                <a href="{{route('productPage', ["ntinformatica","notebooks","macbook"])}}"> <h6 class="mb-1">Apple MacBook Pro 15" Touch Bar MPTU2LL/A 256GB (Prata)</h6></a> 
                                <small class="text-muted opacity-75">Vendido por: <a href=""> <span class="badge bg-primary" >Info Tech</span></a> </small>

                            </div>

                        </div>

                        <div class="mt-2 d-flex justify-content-end">
                            <p class="mb-1">Preço unidade: R$4.599,99</p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <small class="text-muted">Qtd: 2 x 9.199,98</small>
                        </div>

                    </div>
                    <!--//ItemCart-->

                    <!--ItemCart-->
                    <div href="#" class="list-group-item list-group-item-action" aria-current="true">

                        <div class="d-flex w-100 justify-content-between">
                            <div class="imgCart">
                                <img src="{{ asset('site/assets/consoles.png') }}" class="" alt="">
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between mb-1">
                                    <small>Console</small>
                                    <button type="button" class="btn-close" aria-label="Close"></button>
                                </div>

                               <a href=""><h6 class="mb-1">Console Playstation Ps4 PRO 1 TB, 1 controle</h6></a>
                                <small class="text-muted opacity-75">Vendido por: <a href=""> <span class="badge bg-primary" >Info Tech</span></a> </small>

                            </div>

                        </div>

                        <div class="mt-2 d-flex justify-content-end">
                            <p class="mb-1">Preço unidade: R$3.599,99</p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <small class="text-muted">Qtd: 1 x 3.599,99</small>
                        </div>

                    </div>
                    <!--//ItemCart-->

                    <!--ItemCart-->
                    <div href="#" class="list-group-item list-group-item-action" aria-current="true">

                        <div class="d-flex w-100 justify-content-between">
                            <div class="imgCart">
                                <img src="{{ asset('site/assets/iphone11.jpg') }}" class="" alt="">
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between mb-1 ">
                                    <small>Smartphone</small>
                                    <button type="button" class="btn-close" aria-label="Close"></button>
                                </div>

                               <a href=""> <h6 class="mb-1">Iphone 11, 128GB</h6></a>
                                <small class="text-muted opacity-75">Vendido por: <a href=""> <span class="badge bg-primary" >Info Tech</span></a> </small>

                            </div>

                        </div>

                        <div class="mt-2 d-flex justify-content-end">
                            <p class="mb-1">Preço unidade: R$4.599,99</p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <small class="text-muted">Qtd: 2 x 9.199,98</small>
                        </div>

                    </div>
                    <!--//ItemCart-->

                </div>

                <div class="row mt-3">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="text-muted">Subtotal:</h5>
                        <h5>R$21.999,95</h5>
                    </div>

                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="text-muted">Desconto:</h5>
                        <h5>R$0,00</h5>
                    </div>
                    <hr>
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="text-muted">Total:</h5>
                        <h5>R$21.999,95</h5>
                    </div>

                    <div class="d-flex  justify-content-around">
                        <a type="button" class="btn btn-outline-primary">Seguir para carrinho</a>
                        <a href="" class="btn btn-primary border">Confirmar compra</a>
                    </div>


                </div>
            </div>
        </div>
        <!--//CART-->
        