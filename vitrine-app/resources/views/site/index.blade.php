@include('site.masterhead')

<!--CAROUSEL-->
<div id="carouselExampleIndicators" class="carousel slide carouselShopPage" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="#"> <img class="d-block w-100" src="{{ url('site/assets/rog.jpg') }}" alt="Primeiro Slide"> </a>
        </div>
        <div class="carousel-item">
            <a href="#"> <img class="d-block w-100" src="{{ url('site/assets/rog2.jpg') }}" alt="Segundo Slide"> </a>
        </div>
        <div class="carousel-item">
            <a href="#"> <img class="d-block w-100" src="{{ url('site/assets/rog3.jpg') }}" alt="Terceiro Slide"> </a>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
        <span class="sr-only">Próximo</span>
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
</div>
<!--//CAROUSEL-->

<!--Trending Products-->
<div class="row mt-5">
    <div class="title">
        <h2>Produtos em alta</h2>
    </div>

    <div class="row">
        <!--Product Card-->
        <div class="col-sm-6 col-md-4 col-lg-3 bg-light d-flex flex-column productCard border mt-3">

            <div class="d-flex boxImg justify-content-center">
                <div class="cardImg d-flex justify-content-center">
                    <a href="#"><img src="{{ asset('site/assets/laptop.jpg') }}" alt="" class="img-fluid"></a>
                </div>
            </div>


            <div class="bodyCard mt-2">
                <span class="badge bg-info mt-2"><a href="#" class="text-light">Notebook</a> </span>
                <div class="subtitle"><a href="#"> Apple MacBook Pro 15" Touch Bar MPTU2LL/A 256GB (Prata)</a>
                </div>
                <div class="subtitle mt-2  opacity-75">

                    Vendido por: <a href="{{ route('lojas', [1]) }}"><span
                            class="badge bg-primary opacity-75">EiPou</span></a>
                </div>
            </div>

            <div class="footerCard mt-auto  d-flex justify-content-between">
                <div class="priceCard">
                    <div class="oldPrice"><s> R$5.599,99</s></div>
                    <b>R$4.599,99</b>
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
                    <a href="#"><img src="{{ asset('site/assets/lap2.jpg') }}" alt="" class="img-fluid"></a>
                </div>
            </div>



            <div class="bodyCard mt-2">
                <span class="badge bg-info mt-2"><a href="#" class="text-light">Notebook</a> </span>
                <div class="subtitle"><a href="#"> Apple Ipad Pro 12" Touch Bar MPTU2LL/A 256GB (Rosa)</a></div>
                <div class="subtitle mt-2  opacity-75">
                    Vendido por: <a href="{{ route('lojas', [2]) }}"><span class="badge bg-primary opacity-75">Loja
                            X</span></a>
                </div>
            </div>


            <div class="footerCard mt-auto   d-flex justify-content-between ">
                <div class="priceCard d-flex ">

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
        <div class="col-sm-6 col-md-4 col-lg-3 col-lg-3 bg-light  d-flex flex-column productCard border mt-3">

            <div class="d-flex boxImg justify-content-center">
                <div class="cardImg d-flex justify-content-center">
                    <a href="#"><img src="{{ asset('site/assets/note.jpg') }}" alt="" class="img-fluid"></a>
                </div>
            </div>


            <div class="bodyCard mt-2">
                <span class="badge bg-info mt-2"><a href="#" class="text-light">Notebook</a> </span>
                <div class=""><a href="#">Notebook Acer Aspire 5 Intel Core i5-10210U, 8GB RAM, SSD 256GB,
                        15.6 Full HD, Windows 11 Home, Prata - A515-54-57CS </a></div>
                <div class="mt-2 opacity-75">
                    Vendido por: <a href=""><span class="badge bg-primary opacity-75">Info Tech</span></a>
                </div>
            </div>

            <div class="footerCard mt-auto d-flex justify-content-between">
                <div class="priceCard  ">
                    <div class="oldPrice"><s> R$5.599,99</s></div>

                    <b class="d-flex align-items-end">R$4.599,99</b>
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

</div>
<!--//Trending Products-->

<!--CATEGORYS-->
<div class="row mt-5">
    <div class="row">
        <h2 class="title">Categorias</h2>
    </div>

    <div class="row">
        @if (isset($category))
        @foreach ($category as $item)
            
        
        <!--CATEGORY-->
        <div class="col-lg-2 col-md-4 col-sm-6 mt-3 ">
            <a href="{{ route('lojas', [$item['id']]) }}">
                <div class="boxCategory bg-light border text-center">
                    <div class="box">

                        <svg xmlns="http://www.w3.org/2000/svg"  width="60" height="60" viewBox="0 0 100 100">
                            <path
                                d="M16 12.5c0-1.9-1.6-3.5-3.5-3.5S9 10.6 9 12.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5zm-6 0c0-1.4 1.1-2.5 2.5-2.5s2.5 1.1 2.5 2.5-1.1 2.5-2.5 2.5-2.5-1.1-2.5-2.5z" />
                            <path
                                d="M14 12.5c0-.8-.7-1.5-1.5-1.5s-1.5.7-1.5 1.5.7 1.5 1.5 1.5 1.5-.7 1.5-1.5zm-2 0c0-.3.2-.5.5-.5s.5.2.5.5-.2.5-.5.5-.5-.2-.5-.5z" />
                            <path
                                d="M97 0H61c-1.7 0-3 1.3-3 3v28H47V10c0-2.8-2.2-5-5-5H10c-2.8 0-5 2.2-5 5v29c-2.8 0-5 2.2-5 5v51c0 2.8 2.2 5 5 5h32c2.8 0 5-2.2 5-5h51c3.9 0 7-3.1 7-7 0-.1 0-.2-.1-.4 0 0 0-.1-.1-.1 0-.1-.1-.1-.1-.2l-.1-.1-.1-.1-14.1-9.4c.4-.5.6-1.1.6-1.7v-4h11c1.7 0 3-1.3 3-3V3c0-1.7-1.3-3-3-3zM42 74h39V36H19v3h-3v-3c0-1.7 1.3-3 3-3h62c1.7 0 3 1.3 3 3v40c0 .6-.4 1-1 1H42v-3zM7 10c0-1.7 1.3-3 3-3h32c1.7 0 3 1.3 3 3v21H19c-2.8 0-5 2.2-5 5v3H7V10zm33 85c0 1.7-1.3 3-3 3H5c-1.7 0-3-1.3-3-3V44c0-1.7 1.3-3 3-3h32c1.7 0 3 1.3 3 3v51zm-3-56H20v-2h60v36H42V44c0-2.8-2.2-5-5-5zm56 54H42v-4h.1c.4 1.7 2 3 3.9 3h8c1.9 0 3.4-1.3 3.9-3h40c-.5 2.3-2.5 4-4.9 4zm-49-5h12c0 1.1-.9 2-2 2h-8c-1.1 0-2-.9-2-2zm51.7-1H42v-8h41.7l12 8zM98 69c0 .6-.4 1-1 1H86V36c0-2.8-2.2-5-5-5H60v-6h38v44zm0-46H60V3c0-.6.4-1 1-1h36c.6 0 1 .4 1 1v20z" />
                            <path
                                d="M94 4H64c-1.1 0-2 .9-2 2s.9 2 2 2h30c1.1 0 2-.9 2-2s-.9-2-2-2zm0 3H64c-.6 0-1-.4-1-1s.4-1 1-1h30c.6 0 1 .4 1 1s-.4 1-1 1zm0 3H64c-1.1 0-2 .9-2 2s.9 2 2 2h30c1.1 0 2-.9 2-2s-.9-2-2-2zm0 3H64c-.6 0-1-.4-1-1s.4-1 1-1h30c.6 0 1 .4 1 1s-.4 1-1 1zm0 18c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0-3c.6 0 1 .4 1 1s-.4 1-1 1-1-.4-1-1 .4-1 1-1zM50.9 57.6c.1 0 .3 0 .4-.1l14.1-14.1c.2-.2.2-.5 0-.7s-.5-.2-.7 0L50.6 56.8c-.2.2-.2.5 0 .7.1.1.2.1.3.1zm0 4.9c.1 0 .3 0 .4-.1l14.1-14.1c.2-.2.2-.5 0-.7s-.5-.2-.7 0l-14.1 14c-.2.2-.2.5 0 .7.1.2.2.2.3.2zM4 88h34V44H4v44zm1-43h32v42H5V45zm16 45c-1.7 0-3 1.3-3 3s1.3 3 3 3 3-1.3 3-3-1.3-3-3-3zm0 5c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm-2.5-52h5c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-5c-.3 0-.5.2-.5.5s.2.5.5.5z" />
                        </svg>

                        <div class="subtitle text-center ">
                            <h4>{{$item['name']}}</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!--//CATEGORY-->
            @endforeach
        @else
            <div class="row text-center">
                <h5 class="subtitle">Algo inesperado aconteceu :( Tente novamente mais tarde!</h5>
            </div>
        @endif
      
        

        


    </div>

</div>
<!--//CATEGORYS-->



@include('site.footer')
