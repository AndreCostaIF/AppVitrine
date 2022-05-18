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
                            <a class="nav-link active" href="#">início </a>
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
                            <a class="nav-link" href="#">Destaques</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Portal do Parceiro</a>
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
                            <a class="nav-link" href="#"><i class="bi bi-cart"></i></a>
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