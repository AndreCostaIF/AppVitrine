@include('site.masterhead')

<div class="row mb-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ route('lojas', ['informatica']) }}">Lojas de Informática</a></li>
            <li class="breadcrumb-item"><a href="{{ route('shopPage', ['ntinformatica']) }}">NT informática</a></li>
            <li class="breadcrumb-item"><a href="{{ route('productListPage', ['ntinformatica', 3]) }}">Celular e
                    Acessórios</a></li>
            <li class="breadcrumb-item active" aria-current="page">Macbook</li>
        </ol>
    </nav>
</div>


<div class="row mt-3">
    <div class="title">
        <h2>Apple MacBook Pro 15" Touch Bar MPTU2LL/A 256GB (Prata)</h2>
    </div>
</div>

<div class="row">
    <div class="col-sm-6 col-md-6 col-lg-8">
        <div class="boxProduct bg-light">
            <div class="boxImgProduct">
                <img src="{{ asset('site/assets/laptop.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="boxProductFooter">
                <div class="d-flex justify-content-center footerProduct mt-3">
                    <div class="imgFooter">
                        <img src="{{ asset('site/assets/laptop.jpg') }}" class="" alt="">
                    </div>
                    <div class="imgFooter">
                        <img src="{{ asset('site/assets/laptop.jpg') }}" class="" alt="">
                    </div>
                    <div class="imgFooter">
                        <img src="{{ asset('site/assets/laptop.jpg') }}" class="" alt="">
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="col-sm-6 col-md-6 col-lg-4 boxProductPrice bg-light">

        <div class="alert alert-primary mt-4" role="alert">
            Preço:
            <div class="priceCard">
                <div class="oldPrice"><s> de R$5.599,99</s></div>
                <b>por R$4.599,99</b>
            </div>

            <div class="addCart">
                <form method="#" class="d-flex">
                    @csrf

                    <div class="col-5">

                        <div class="form-floating mb-3">

                            <div class="form-floating">
                                <select class="form-select" name="uf" id="uf"
                                    aria-label="Floating label select example">
                                    <option value="" selected>Selecione</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>

                                </select>
                                <label for="uf">Quantidade</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-5 btnGroup">
                        <button class="btn btn-primary" type="submit">Adicionar ao Carrinho <i
                                class="bi bi-cart"></i></button>

                    </div>
                    <div class="col-1 favoriteProd">
                        <a href="#"><i class="bi bi-suit-heart favorite"></i></a>
                    </div>



                </form>
            </div>
        </div>

        <div class="d-flex mt-4 flex-column aux">
            <div class="p-2 bd-highlight">
                <p class="subtitle">Retirar na loja <i class="bi bi-send-check"></i><br><span
                        class="details">Logo após confirmação</span></p>
            </div>
        </div>

        <div class="resume mt-4">
            <h5 class="subtitle">Resumo:</h5>
            MacBook Pro 13” Apple Intel Core i5 16GB RAM - 512GB SSD Cinza-espacial
            O MacBook Pro vem com processador Intel de quatro núcleos que executa tarefas até 90% mais
            rápido*. Ele também tem a tela Retina brilhante e colorida com tecnologia True Tone para uma
            visualização mais confortável, Magic Keyboard retroiluminado, Touch ID e controles dinâmicos na
            Touch Bar...

        </div>
        <div class="buttonGroup mt-4">
            <p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Duvidas <i class="bi bi-question-circle"></i>
                </button>
            </p>
        </div>


    </div>
</div>

<div class="row mt-3 ">
    <div class="col-sm-6 col-md-6 col-lg-6 mb-3">
        <div class="card card-body text-center">
            <h5 class="subtitle">Descrição:</h5>
            MacBook Pro 13” Apple Intel Core i5 16GB RAM - 512GB SSD Cinza-espacial
            O MacBook Pro vem com processador Intel de quatro núcleos que executa tarefas até 90% mais
            rápido*. Ele também tem a tela Retina brilhante e colorida com tecnologia True Tone para uma
            visualização mais confortável, Magic Keyboard retroiluminado, Touch ID e controles dinâmicos na
            Touch Bar. É mais produtividade para tudo o que você faz. Aviso Legal: *Em comparação com o
            MacBook Pro de 13 polegadas com dois núcleos e duas portas Thunderbolt 3.Avisos legaisÉ possível
            personalizar a configuração do processador, da memória e do armazenamento.*Em comparação com a
            geração anterior do MacBook Pro de 13 polegadas com processador de dois núcleos.**A duração da
            bateria varia de acordo com o uso e a configuração. Consulte o site do fabricante para obter
            mais informações.
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 mb-3">

        <div class="card card-body">
            <h5 class="subtitle text-center">Especificações</h5>
            <hr>
            <table class="table table-hover">


                <tbody>
                    <tr>
                        <th>Processador</th>
                        <td>M1</td>
                    </tr>

                    <tr>
                        <th>Memoria ram</th>
                        <td>16GB</td>
                    </tr>

                    <tr>
                        <th>Armazenamento</th>
                        <td>256GB</td>
                    </tr>

                    <tr>
                        <th>Cor</th>
                        <td>Prata</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row mt-5">

    <div class="row title">
        <h2>Produtos relacionados</h2>
    </div>

    <!--Product Card-->
    <div class="col-sm-6 col-md-4 col-lg-3 bg-light d-flex flex-column productCard border mt-3">

        <div class="d-flex boxImg justify-content-center">
            <div class="cardImg d-flex justify-content-center">
                <a href="#"><img src="{{ asset('site/assets/consoles.png') }}" alt="" class="img-fluid"></a>
            </div>
        </div>



        <div class="bodyCard mt-2">
            <span class="badge bg-info mt-2"><a href="#" class="text-light">Console</a> </span>
            <div class="subtitle"><a href="#"> Console Playstation Ps4 PRO 1 TB, 1 controle</a></div>
            <div class="subtitle mt-2  opacity-75">
                Vendido por: <a href=""> <span class="badge bg-primary opacity-75">Info Tech</span></a>
            </div>
        </div>


        <div class="footerCard mt-auto d-flex justify-content-between">
            <div class="priceCard">


                <b class="d-flex align-items-end">R$3.599,99</b>
            </div>

            <div class="controlCard mt-auto">
                <a href="#"><i class="bi bi-suit-heart favorite"></i></a>
                <a href="#"><i class="bi bi-cart carrinho"></i></a>
            </div>
        </div>
    </div>
    <!--//Product Card-->

    <!--Product Card-->
    <div class="col-sm-6 col-md-4 col-lg-3 bg-light d-flex flex-column productCard border mt-3">

        <div class="d-flex boxImg justify-content-center">
            <div class="cardImg d-flex justify-content-center">
                <a href="#"><img src="{{ asset('site/assets/consoles.png') }}" alt="" class="img-fluid"></a>
            </div>
        </div>



        <div class="bodyCard mt-2">
            <span class="badge bg-info mt-2"><a href="#" class="text-light">Console</a> </span>
            <div class="subtitle"><a href="#"> Console Playstation Ps4 PRO 1 TB, 1 controle</a></div>
            <div class="subtitle mt-2  opacity-75">
                Vendido por: <a href=""> <span class="badge bg-primary opacity-75">Info Tech</span></a>
            </div>
        </div>


        <div class="footerCard mt-auto d-flex justify-content-between">
            <div class="priceCard">


                <b class="d-flex align-items-end">R$3.599,99</b>
            </div>

            <div class="controlCard mt-auto">
                <a href="#"><i class="bi bi-suit-heart favorite"></i></a>
                <a href="#"><i class="bi bi-cart carrinho"></i></a>
            </div>
        </div>
    </div>
    <!--//Product Card-->

    <!--Product Card-->
    <div class="col-sm-6 col-md-4 col-lg-3 bg-light d-flex flex-column productCard border mt-3">

        <div class="d-flex boxImg justify-content-center">
            <div class="cardImg d-flex justify-content-center">
                <a href="#"><img src="{{ asset('site/assets/consoles.png') }}" alt="" class="img-fluid"></a>
            </div>
        </div>



        <div class="bodyCard mt-2">
            <span class="badge bg-info mt-2"><a href="#" class="text-light">Console</a> </span>
            <div class="subtitle"><a href="#"> Console Playstation Ps4 PRO 1 TB, 1 controle</a></div>
            <div class="subtitle mt-2  opacity-75">
                Vendido por: <a href=""> <span class="badge bg-primary opacity-75">Info Tech</span></a>
            </div>
        </div>


        <div class="footerCard mt-auto d-flex justify-content-between">
            <div class="priceCard">


                <b class="d-flex align-items-end">R$3.599,99</b>
            </div>

            <div class="controlCard mt-auto">
                <a href="#"><i class="bi bi-suit-heart favorite"></i></a>
                <a href="#"><i class="bi bi-cart carrinho"></i></a>
            </div>
        </div>
    </div>
    <!--//Product Card-->

    <!--Product Card-->
    <div class="col-sm-6 col-md-4 col-lg-3 bg-light d-flex flex-column productCard border mt-3">

        <div class="d-flex boxImg justify-content-center">
            <div class="cardImg d-flex justify-content-center">
                <a href="#"><img src="{{ asset('site/assets/consoles.png') }}" alt="" class="img-fluid"></a>
            </div>
        </div>



        <div class="bodyCard mt-2">
            <span class="badge bg-info mt-2"><a href="#" class="text-light">Console</a> </span>
            <div class="subtitle"><a href="#"> Console Playstation Ps4 PRO 1 TB, 1 controle</a></div>
            <div class="subtitle mt-2  opacity-75">
                Vendido por: <a href=""> <span class="badge bg-primary opacity-75">Info Tech</span></a>
            </div>
        </div>


        <div class="footerCard mt-auto d-flex justify-content-between">
            <div class="priceCard">


                <b class="d-flex align-items-end">R$3.599,99</b>
            </div>

            <div class="controlCard mt-auto">
                <a href="#"><i class="bi bi-suit-heart favorite"></i></a>
                <a href="#"><i class="bi bi-cart carrinho"></i></a>
            </div>
        </div>
    </div>
    <!--//Product Card-->




</div>

<div class="row mt-5">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                   
                </div>
            </div>
        </div>
    </div>
</div>

@include('site.footer')
