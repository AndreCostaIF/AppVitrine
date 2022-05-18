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

        <!--Product Card-->
        <div class="col-sm-6 col-md-4 col-lg-3 col-lg-3 d-flex flex-column bg-light productCard border mt-3">

            <div class="d-flex boxImg  justify-content-center">
                <div class="cardImg d-flex justify-content-center">
                    <a href="#"><img src="{{ asset('site/assets/note.jpg') }}" alt="" class="img-fluid"></a>
                </div>
            </div>

            <div class="bodyCard mt-2 mb-2">
                <span class="badge bg-info mt-2"><a href="#" class="text-light">Notebook</a> </span>
                <div class="subtitle mt-2"><a href="#">NotebookAcer Aspire 5 Intel Core i5-10210U, 8GB RAM, SSD 256GB,
                        15.6 Full HD, Windows 11 Home, Prata - A515-54-57CS </a></div>
                <div class="subtitle mt-2 opacity-75">Vendido por: <span class="badge bg-primary opacity-75">Ze
                        Tech</span></div>
            </div>

            <div class="footerCard mt-auto d-flex justify-content-between">
                <div class="priceCard  ">
                    <div class="oldPrice"><s> R$5.599,99</s></div>

                    <b class="d-flex align-items-end">R$4.299,99</b>
                </div>

                <div class="controlCard mt-auto">
                    <a href="#"><i class="bi bi-suit-heart favorite"></i></a>
                    <a href="#"><i class="bi bi-cart carrinho"></i></a>
                </div>

            </div>
        </div>
        <!--//Product Card-->

        <!--Product Card-->
        <div class="col-sm-6 col-md-4 col-lg-3 col-lg-3 d-flex flex-column bg-light productCard border mt-3">

            <div class="d-flex boxImg  justify-content-center">
                <div class="cardImg d-flex justify-content-center">
                    <a href="#"><img src="{{ asset('site/assets/iphone11.jpg') }}" alt=""
                            class="img-fluid"></a>
                </div>
            </div>

            <div class="bodyCard mt-2 mb-2">
                <span class="badge bg-info mt-2"><a href="#" class="text-light">Smartphone</a> </span>
                <div class="subtitle mt-2"><a href="#">iPhone 11 Apple (64GB) Branco Tela 6,1" 4G Câmera 12MP iOS </a>
                </div>
                <div class="subtitle mt-2 opacity-75">Vendido por: <span
                        class="badge bg-primary opacity-75">EiPou</span></div>
            </div>

            <div class="footerCard mt-auto d-flex justify-content-between">
                <div class="priceCard  ">
                    <div class="oldPrice"><s> R$4.199,009</s></div>

                    <b class="d-flex align-items-end">R$3.774,10</b>
                </div>

                <div class="controlCard mt-auto">
                    <a href="#"><i class="bi bi-suit-heart favorite"></i></a>
                    <a href="#"><i class="bi bi-cart carrinho"></i></a>
                </div>

            </div>
        </div>
        <!--//Product Card-->

        <!--Product Card-->
        <div class="col-sm-6 col-md-4 col-lg-3 col-lg-3 d-flex flex-column bg-light productCard border mt-3">

            <div class="d-flex boxImg justify-content-center">
                <div class="cardImg d-flex justify-content-center">
                    <a href="#"><img src="{{ asset('site/assets/jbl.jpg') }}" alt="" class="img-fluid"></a>
                </div>
            </div>

            <div class="bodyCard mt-2 mb-2">
                <span class="badge bg-info mt-2"><a href="#" class="text-light">Fones de ouvidos</a> </span>
                <div class="subtitle mt-2"><a href="#">Fone de Ouvido JBL Tune 500 On Ear Preto - JBLT500BLK </a>
                </div>
                <div class="subtitle mt-2 opacity-75">Vendido por: <span
                        class="badge bg-primary opacity-75">EiPou</span></div>
            </div>

            <div class="footerCard mt-auto d-flex justify-content-between">
                <div class="priceCard  ">


                    <b class="d-flex align-items-end">R$139,00</b>
                </div>

                <div class="controlCard mt-auto">
                    <a href="#"><i class="bi bi-suit-heart favorite"></i></a>
                    <a href="#"><i class="bi bi-cart carrinho"></i></a>
                </div>

            </div>
        </div>
        <!--//Product Card-->

        <!--Product Card-->
        <div class="col-sm-6 col-md-4 col-lg-3 col-lg-3 d-flex flex-column bg-light productCard border mt-3">

            <div class="d-flex boxImg justify-content-center">
                <div class="cardImg d-flex justify-content-center">
                    <a href="#"><img src="{{ asset('site/assets/camisa.jpg') }}" alt="" class="img-fluid"></a>
                </div>
            </div>

            <div class="bodyCard mt-2 mb-2">
                <span class="badge bg-info mt-2"><a href="#" class="text-light">Moda</a> </span>
                <div class="subtitle mt-2"><a href="#">Camisa Polo Listra na Gola, Aramis, Masculino</a></div>
                <div class="subtitle mt-2 opacity-75"> Vendido por: <a href=""><span
                            class="badge bg-primary opacity-75">Maria's fashion</span></a></div>
            </div>

            <div class="footerCard mt-auto d-flex justify-content-between">
                <div class="priceCard  ">


                    <b class="d-flex align-items-end">R$139,00</b>
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
        <!--CATEGORY-->
        <div class="col-lg-2 col-md-4 col-sm-6 mt-3 ">
            <a href="{{ route('lojas', ['informatica']) }}">
                <div class="boxCategory bg-light border text-center">
                    <div class="box">

                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 100 100">
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
                            <h4>Informática</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!--//CATEGORY-->

        <!--CATEGORY-->
        <div class="col-lg-2 col-md-4 col-sm-6 mt-3 ">
            <a href="{{ route('lojas', ['informatica']) }}">
                <div class="boxCategory bg-light border text-center">
                    <div class="box">

                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 100 100">
                            <path
                                d="M37.5 11c1.9 0 3.5-1.6 3.5-3.5S39.4 4 37.5 4 34 5.6 34 7.5s1.6 3.5 3.5 3.5zm0-6C38.9 5 40 6.1 40 7.5S38.9 10 37.5 10 35 8.9 35 7.5 36.1 5 37.5 5zm8 4c.8 0 1.5-.7 1.5-1.5S46.3 6 45.5 6 44 6.7 44 7.5 44.7 9 45.5 9zm0-2c.3 0 .5.2.5.5s-.2.5-.5.5-.5-.2-.5-.5.2-.5.5-.5zM4 81h36V28H4v53zm2-51h32v49H6V30zm16 53c-2.8 0-5 2.2-5 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 8c-1.7 0-3-1.3-3-3s1.3-3 3-3 3 1.3 3 3-1.3 3-3 3zm-3-66h6c1.1 0 2-.9 2-2s-.9-2-2-2h-6c-1.1 0-2 .9-2 2s.9 2 2 2zm0-3h6c.6 0 1 .4 1 1s-.4 1-1 1h-6c-.6 0-1-.4-1-1s.4-1 1-1zm-6 3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0-3c.6 0 1 .4 1 1s-.4 1-1 1-1-.4-1-1 .4-1 1-1z" />
                            <path
                                d="M98 40h-2v-2c0-.6-.4-1-1-1h-3V8c0-1.5-1.5-3-3-3s-3 1.5-3 3v22c0 .4-.6 1-1 1s-1-.6-1-1V8c0-1.5-1.5-3-3-3s-3 1.5-3 3v82c0 3.4-2.6 6-6 6H59c-3.4 0-6-2.6-6-6h2.4c1.4 0 2.6-1.2 2.6-2.6V84h11c2.8 0 5-2.2 5-5V5c0-2.8-2.2-5-5-5H35c-2.8 0-5 2.2-5 5v11H5c-2.8 0-5 2.2-5 5v74c0 2.8 2.2 5 5 5h34c2.8 0 5-2.2 5-5V84h2v3.4c0 1.4 1.2 2.6 2.6 2.6H51c0 4.6 3.4 8 8 8h13c4.6 0 8-3.4 8-8V8c0-.4.6-1 1-1s1 .6 1 1v22c0 1.5 1.5 3 3 3s3-1.5 3-3V8c0-.4.6-1 1-1s1 .6 1 1v29h-3c-.6 0-1 .4-1 1v2h-2c-1.1 0-2 .9-2 2v26c0 1.1.9 2 2 2h1v9c0 1.1.9 2 2 2h1c1.1 0 2-.9 2-2v-9h2v9c0 1.1.9 2 2 2h1c1.1 0 2-.9 2-2v-9h1c1.1 0 2-.9 2-2V42c0-1.1-.9-2-2-2zM42 92c0 1.7-1.3 3-3 3H5c-1.7 0-3-1.3-3-3V21c0-.2 0-.4.1-.6C2.3 19 3.6 18 5 18h34c.2 0 .4 0 .6.1 1.2.2 2.1 1.2 2.3 2.3 0 .2.1.4.1.6v71zm-3-76h-7v-2h40v62c0 1.7-1.3 3-3 3H44V21c0-2.8-2.2-5-5-5zM35 2h34c1.4 0 2.7 1 2.9 2.4.1.2.1.4.1.6v8H32V5c0-.2 0-.4.1-.6C32.3 3 33.6 2 35 2zm4 96H5c-1.7 0-3-1.3-3-3v-.4c.7.9 1.8 1.4 3 1.4h34c1.2 0 2.3-.5 3-1.4v.4c0 1.7-1.3 3-3 3zm5-16v-2h25c1.2 0 2.3-.5 3-1.4v.4c0 1.7-1.3 3-3 3H44zm12 2v2h-8v-2h8zm-7.4 4c-.3 0-.6-.3-.6-.6V87h8v.4c0 .3-.3.6-.6.6h-6.8zM95 68h-8V42h8v26zm-7-29h6v1h-6v-1zm-4 3h2v26h-2V42zm4 37h-1v-9h1v9zm7 0h-1v-9h1v9zm1-11V42h2v26h-2z" />
                        </svg>

                        <div class="subtitle text-center ">
                            <h4>Smartphones</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!--//CATEGORY-->

        <!--CATEGORY-->
        <div class="col-lg-2 col-md-4 col-sm-6 mt-3 ">
            <a href="{{ route('lojas', ['informatica']) }}">
                <div class="boxCategory bg-light border text-center">
                    <div class="box">

                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 100 100">
                            <path
                                d="M99.9 20.1c.1-.3.1-.5-.1-.8C93.9 7.4 81.9 0 68.6 0 57.3 0 47.2 5.4 40.8 13.8c-2-4.4-4.8-8.2-4.9-8.4-.3-.2-.6-.4-.9-.4h-5c-.3 0-.5.1-.7.3L27.6 7h-7.1l-1.7-1.7c-.2-.2-.4-.3-.7-.3h-5c-.3 0-.6.2-.8.4-.2.2-4.2 5.8-6.1 11.3-.9 2.5-2.1 7.1-.2 9.7.8 1.1 2 1.6 3.4 1.6 3 0 5.9-3.1 7.4-6h.3c1.9 0 3.4-1.3 3.8-3h6.3c.4 1.7 2 3 3.8 3h.2c.8 1.7 2 3.4 3.5 4.6-.7 2.7-1.1 5.5-1.1 8.4 0 1 .1 2 .1 3H1c-.6 0-1 .4-1 1v60c0 .6.4 1 1 1h70c.6 0 1-.4 1-1V80h18c.3 0 .6-.2.8-.4.2-.3 4.2-6.4 4.2-14.6 0-2.3-.3-4.4-.8-6.2 2.2-2.4 4.1-5.1 5.6-8.1.1-.2.1-.5.1-.8-.1-.3-.3-.5-.5-.6L70.8 35l28.6-14.3c.3-.1.5-.3.5-.6zM30.5 7h4c.2.2.4.6.7 1h-5.7l1-1zM13.6 7h4l1 1h-5.7c.3-.4.6-.8.7-1zm3.5 13c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm12-2c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2-2-.9-2-2zm4 3.4c1.1-.7 1.9-2 1.9-3.4 0-2.2-1.8-4-4-4-1.9 0-3.4 1.3-3.8 3h-6.3c-.4-1.7-2-3-3.8-3-2.2 0-4 1.8-4 4 0 1.4.7 2.6 1.8 3.3-1.3 2.3-3.5 4.7-5.5 4.7-.8 0-1.4-.3-1.8-.8-1-1.3-.8-4.3.5-7.9 1.1-3.1 2.9-6.2 4.2-8.3h23.6c1.3 2.1 3.2 5.3 4.2 8.3 1.2 3.3 1.3 6.3.2 7.7-.4.6-1.1.9-2 .9-2 .1-4-2.2-5.2-4.5zM23 40v43H2V40h21zM2 98V85h21v13H2zm22 0V85h46v13H24zm46-15H24V40h46v10H42c-.3 0-.6.2-.8.4-.2.3-4.2 6.4-4.2 14.6s4 14.3 4.2 14.6c.2.3.5.4.8.4h28v3zM47 52v2h-5.5c.4-.9.8-1.6 1-2H47zm0 26h-4.4c-.2-.4-.6-1.1-1-2H47v2zm42.4 0H85v-2h5.5c-.4.9-.8 1.6-1.1 2zm1.9-4H84c-.6 0-1 .4-1 1v3H49v-3c0-.6-.4-1-1-1h-7.3c-.9-2.4-1.7-5.5-1.7-9s.8-6.6 1.7-9H48c.6 0 1-.4 1-1v-3h34v3c0 .6.4 1 1 1h7.3c.9 2.4 1.7 5.5 1.7 9s-.8 6.6-1.7 9zm-1.9-22c.2.4.6 1.1 1 2H85v-2h4.4zM68.1 34.1c-.3.2-.6.5-.6.9s.2.7.6.9l29.5 14.8c-1.1 2.1-2.5 4.1-4 5.9-1.2-3.6-2.7-5.9-2.8-6.1-.2-.3-.5-.5-.8-.5H72V39c0-.6-.4-1-1-1H35.7c-.1-1-.2-2-.2-3 0-2.5.3-5 .8-7.4.6.2 1.2.4 1.9.4 1.5 0 2.8-.6 3.6-1.8 1.4-2 1.4-5.5 0-9.6-.1-.2-.2-.5-.3-.7 6-8.4 15.8-14 26.9-14 12.2 0 23.3 6.6 29.1 17.4L68.1 34.1z" />
                            <path
                                d="M64.1 90H29.9c-.5 0-.9.4-.9.9V92c0 .5.4.9.9.9H64c.5 0 .9-.4.9-.9v-1.1c.1-.5-.3-.9-.8-.9zm-.1 2H30v-1h34v1zM17 48c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0-3c.6 0 1 .4 1 1s-.4 1-1 1-1-.4-1-1 .4-1 1-1zm36 31h26V54H53v22zm1-21h24v20H54V55zm32 5c-2.8 0-5 2.2-5 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 9c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4zm-36.6-6H48v-1.4c0-.9-.7-1.6-1.6-1.6h-.7c-.9 0-1.6.7-1.6 1.6V63h-1.4c-.9 0-1.6.7-1.6 1.6v.7c0 .9.7 1.6 1.6 1.6H44v1.4c0 .9.7 1.6 1.6 1.6h.7c.9 0 1.6-.7 1.6-1.6V67h1.4c.9 0 1.6-.7 1.6-1.6v-.7c.1-1-.6-1.7-1.5-1.7zm.6 2.4c0 .3-.3.6-.6.6H47v2.4c0 .3-.3.6-.6.6h-.7c-.3 0-.6-.3-.6-.6V66h-2.4c-.3 0-.6-.3-.6-.6v-.7c0-.3.3-.6.6-.6H45v-2.4c0-.3.3-.6.6-.6h.7c.3 0 .6.3.6.6V64h2.4c.3 0 .6.3.6.6v.8zM70.5 15C68 15 66 17 66 19.5s2 4.5 4.5 4.5 4.5-2 4.5-4.5-2-4.5-4.5-4.5zm0 7c-1.4 0-2.5-1.1-2.5-2.5s1.1-2.5 2.5-2.5 2.5 1.1 2.5 2.5-1.1 2.5-2.5 2.5z" />
                        </svg>
                        <div class="subtitle text-center ">
                            <h4>Entretenimento</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!--//CATEGORY-->

        <!--CATEGORY-->
        <div class="col-lg-2 col-md-4 col-sm-6 mt-3 ">
            <a href="{{ route('lojas', ['informatica']) }}">
                <div class="boxCategory bg-light border text-center">
                    <div class="box">

                        <svg xmlns="http://www.w3.org/2000/svg"  class="icon icon-tabler icon-tabler-grill" width="75" height="75" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M19 8h-14a6 6 0 0 0 6 6h2a6 6 0 0 0 5.996 -5.775l.004 -.225z"></path>
                            <path d="M17 20a2 2 0 1 1 0 -4a2 2 0 0 1 0 4z"></path>
                            <path d="M15 14l1 2"></path>
                            <path d="M9 14l-3 6"></path>
                            <path d="M15 18h-8"></path>
                            <path d="M15 5v-1"></path>
                            <path d="M12 5v-1"></path>
                            <path d="M9 5v-1"></path>
                         </svg>

                        <div class="subtitle text-center ">
                            <h4>Alimentação</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!--//CATEGORY-->

        <!--CATEGORY-->
        <div class="col-lg-2 col-md-4 col-sm-6 mt-3 ">
            <a href="{{ route('lojas', ['informatica']) }}">
                <div class="boxCategory bg-light border text-center">
                    <div class="box">

                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 100 100">
                            <path
                                d="M99.9 20.1c.1-.3.1-.5-.1-.8C93.9 7.4 81.9 0 68.6 0 57.3 0 47.2 5.4 40.8 13.8c-2-4.4-4.8-8.2-4.9-8.4-.3-.2-.6-.4-.9-.4h-5c-.3 0-.5.1-.7.3L27.6 7h-7.1l-1.7-1.7c-.2-.2-.4-.3-.7-.3h-5c-.3 0-.6.2-.8.4-.2.2-4.2 5.8-6.1 11.3-.9 2.5-2.1 7.1-.2 9.7.8 1.1 2 1.6 3.4 1.6 3 0 5.9-3.1 7.4-6h.3c1.9 0 3.4-1.3 3.8-3h6.3c.4 1.7 2 3 3.8 3h.2c.8 1.7 2 3.4 3.5 4.6-.7 2.7-1.1 5.5-1.1 8.4 0 1 .1 2 .1 3H1c-.6 0-1 .4-1 1v60c0 .6.4 1 1 1h70c.6 0 1-.4 1-1V80h18c.3 0 .6-.2.8-.4.2-.3 4.2-6.4 4.2-14.6 0-2.3-.3-4.4-.8-6.2 2.2-2.4 4.1-5.1 5.6-8.1.1-.2.1-.5.1-.8-.1-.3-.3-.5-.5-.6L70.8 35l28.6-14.3c.3-.1.5-.3.5-.6zM30.5 7h4c.2.2.4.6.7 1h-5.7l1-1zM13.6 7h4l1 1h-5.7c.3-.4.6-.8.7-1zm3.5 13c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm12-2c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2-2-.9-2-2zm4 3.4c1.1-.7 1.9-2 1.9-3.4 0-2.2-1.8-4-4-4-1.9 0-3.4 1.3-3.8 3h-6.3c-.4-1.7-2-3-3.8-3-2.2 0-4 1.8-4 4 0 1.4.7 2.6 1.8 3.3-1.3 2.3-3.5 4.7-5.5 4.7-.8 0-1.4-.3-1.8-.8-1-1.3-.8-4.3.5-7.9 1.1-3.1 2.9-6.2 4.2-8.3h23.6c1.3 2.1 3.2 5.3 4.2 8.3 1.2 3.3 1.3 6.3.2 7.7-.4.6-1.1.9-2 .9-2 .1-4-2.2-5.2-4.5zM23 40v43H2V40h21zM2 98V85h21v13H2zm22 0V85h46v13H24zm46-15H24V40h46v10H42c-.3 0-.6.2-.8.4-.2.3-4.2 6.4-4.2 14.6s4 14.3 4.2 14.6c.2.3.5.4.8.4h28v3zM47 52v2h-5.5c.4-.9.8-1.6 1-2H47zm0 26h-4.4c-.2-.4-.6-1.1-1-2H47v2zm42.4 0H85v-2h5.5c-.4.9-.8 1.6-1.1 2zm1.9-4H84c-.6 0-1 .4-1 1v3H49v-3c0-.6-.4-1-1-1h-7.3c-.9-2.4-1.7-5.5-1.7-9s.8-6.6 1.7-9H48c.6 0 1-.4 1-1v-3h34v3c0 .6.4 1 1 1h7.3c.9 2.4 1.7 5.5 1.7 9s-.8 6.6-1.7 9zm-1.9-22c.2.4.6 1.1 1 2H85v-2h4.4zM68.1 34.1c-.3.2-.6.5-.6.9s.2.7.6.9l29.5 14.8c-1.1 2.1-2.5 4.1-4 5.9-1.2-3.6-2.7-5.9-2.8-6.1-.2-.3-.5-.5-.8-.5H72V39c0-.6-.4-1-1-1H35.7c-.1-1-.2-2-.2-3 0-2.5.3-5 .8-7.4.6.2 1.2.4 1.9.4 1.5 0 2.8-.6 3.6-1.8 1.4-2 1.4-5.5 0-9.6-.1-.2-.2-.5-.3-.7 6-8.4 15.8-14 26.9-14 12.2 0 23.3 6.6 29.1 17.4L68.1 34.1z" />
                            <path
                                d="M64.1 90H29.9c-.5 0-.9.4-.9.9V92c0 .5.4.9.9.9H64c.5 0 .9-.4.9-.9v-1.1c.1-.5-.3-.9-.8-.9zm-.1 2H30v-1h34v1zM17 48c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0-3c.6 0 1 .4 1 1s-.4 1-1 1-1-.4-1-1 .4-1 1-1zm36 31h26V54H53v22zm1-21h24v20H54V55zm32 5c-2.8 0-5 2.2-5 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 9c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4zm-36.6-6H48v-1.4c0-.9-.7-1.6-1.6-1.6h-.7c-.9 0-1.6.7-1.6 1.6V63h-1.4c-.9 0-1.6.7-1.6 1.6v.7c0 .9.7 1.6 1.6 1.6H44v1.4c0 .9.7 1.6 1.6 1.6h.7c.9 0 1.6-.7 1.6-1.6V67h1.4c.9 0 1.6-.7 1.6-1.6v-.7c.1-1-.6-1.7-1.5-1.7zm.6 2.4c0 .3-.3.6-.6.6H47v2.4c0 .3-.3.6-.6.6h-.7c-.3 0-.6-.3-.6-.6V66h-2.4c-.3 0-.6-.3-.6-.6v-.7c0-.3.3-.6.6-.6H45v-2.4c0-.3.3-.6.6-.6h.7c.3 0 .6.3.6.6V64h2.4c.3 0 .6.3.6.6v.8zM70.5 15C68 15 66 17 66 19.5s2 4.5 4.5 4.5 4.5-2 4.5-4.5-2-4.5-4.5-4.5zm0 7c-1.4 0-2.5-1.1-2.5-2.5s1.1-2.5 2.5-2.5 2.5 1.1 2.5 2.5-1.1 2.5-2.5 2.5z" />
                        </svg>
                        <div class="subtitle text-center ">
                            <h4>Entretenimento</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!--//CATEGORY-->

        <!--CATEGORY-->
        <div class="col-lg-2 col-md-4 col-sm-6 mt-3 ">
            <a href="{{ route('lojas', ['informatica']) }}">
                <div class="boxCategory bg-light border text-center">
                    <div class="box">

                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 100 100">
                            <path
                                d="M99.9 20.1c.1-.3.1-.5-.1-.8C93.9 7.4 81.9 0 68.6 0 57.3 0 47.2 5.4 40.8 13.8c-2-4.4-4.8-8.2-4.9-8.4-.3-.2-.6-.4-.9-.4h-5c-.3 0-.5.1-.7.3L27.6 7h-7.1l-1.7-1.7c-.2-.2-.4-.3-.7-.3h-5c-.3 0-.6.2-.8.4-.2.2-4.2 5.8-6.1 11.3-.9 2.5-2.1 7.1-.2 9.7.8 1.1 2 1.6 3.4 1.6 3 0 5.9-3.1 7.4-6h.3c1.9 0 3.4-1.3 3.8-3h6.3c.4 1.7 2 3 3.8 3h.2c.8 1.7 2 3.4 3.5 4.6-.7 2.7-1.1 5.5-1.1 8.4 0 1 .1 2 .1 3H1c-.6 0-1 .4-1 1v60c0 .6.4 1 1 1h70c.6 0 1-.4 1-1V80h18c.3 0 .6-.2.8-.4.2-.3 4.2-6.4 4.2-14.6 0-2.3-.3-4.4-.8-6.2 2.2-2.4 4.1-5.1 5.6-8.1.1-.2.1-.5.1-.8-.1-.3-.3-.5-.5-.6L70.8 35l28.6-14.3c.3-.1.5-.3.5-.6zM30.5 7h4c.2.2.4.6.7 1h-5.7l1-1zM13.6 7h4l1 1h-5.7c.3-.4.6-.8.7-1zm3.5 13c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm12-2c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2-2-.9-2-2zm4 3.4c1.1-.7 1.9-2 1.9-3.4 0-2.2-1.8-4-4-4-1.9 0-3.4 1.3-3.8 3h-6.3c-.4-1.7-2-3-3.8-3-2.2 0-4 1.8-4 4 0 1.4.7 2.6 1.8 3.3-1.3 2.3-3.5 4.7-5.5 4.7-.8 0-1.4-.3-1.8-.8-1-1.3-.8-4.3.5-7.9 1.1-3.1 2.9-6.2 4.2-8.3h23.6c1.3 2.1 3.2 5.3 4.2 8.3 1.2 3.3 1.3 6.3.2 7.7-.4.6-1.1.9-2 .9-2 .1-4-2.2-5.2-4.5zM23 40v43H2V40h21zM2 98V85h21v13H2zm22 0V85h46v13H24zm46-15H24V40h46v10H42c-.3 0-.6.2-.8.4-.2.3-4.2 6.4-4.2 14.6s4 14.3 4.2 14.6c.2.3.5.4.8.4h28v3zM47 52v2h-5.5c.4-.9.8-1.6 1-2H47zm0 26h-4.4c-.2-.4-.6-1.1-1-2H47v2zm42.4 0H85v-2h5.5c-.4.9-.8 1.6-1.1 2zm1.9-4H84c-.6 0-1 .4-1 1v3H49v-3c0-.6-.4-1-1-1h-7.3c-.9-2.4-1.7-5.5-1.7-9s.8-6.6 1.7-9H48c.6 0 1-.4 1-1v-3h34v3c0 .6.4 1 1 1h7.3c.9 2.4 1.7 5.5 1.7 9s-.8 6.6-1.7 9zm-1.9-22c.2.4.6 1.1 1 2H85v-2h4.4zM68.1 34.1c-.3.2-.6.5-.6.9s.2.7.6.9l29.5 14.8c-1.1 2.1-2.5 4.1-4 5.9-1.2-3.6-2.7-5.9-2.8-6.1-.2-.3-.5-.5-.8-.5H72V39c0-.6-.4-1-1-1H35.7c-.1-1-.2-2-.2-3 0-2.5.3-5 .8-7.4.6.2 1.2.4 1.9.4 1.5 0 2.8-.6 3.6-1.8 1.4-2 1.4-5.5 0-9.6-.1-.2-.2-.5-.3-.7 6-8.4 15.8-14 26.9-14 12.2 0 23.3 6.6 29.1 17.4L68.1 34.1z" />
                            <path
                                d="M64.1 90H29.9c-.5 0-.9.4-.9.9V92c0 .5.4.9.9.9H64c.5 0 .9-.4.9-.9v-1.1c.1-.5-.3-.9-.8-.9zm-.1 2H30v-1h34v1zM17 48c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0-3c.6 0 1 .4 1 1s-.4 1-1 1-1-.4-1-1 .4-1 1-1zm36 31h26V54H53v22zm1-21h24v20H54V55zm32 5c-2.8 0-5 2.2-5 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 9c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4zm-36.6-6H48v-1.4c0-.9-.7-1.6-1.6-1.6h-.7c-.9 0-1.6.7-1.6 1.6V63h-1.4c-.9 0-1.6.7-1.6 1.6v.7c0 .9.7 1.6 1.6 1.6H44v1.4c0 .9.7 1.6 1.6 1.6h.7c.9 0 1.6-.7 1.6-1.6V67h1.4c.9 0 1.6-.7 1.6-1.6v-.7c.1-1-.6-1.7-1.5-1.7zm.6 2.4c0 .3-.3.6-.6.6H47v2.4c0 .3-.3.6-.6.6h-.7c-.3 0-.6-.3-.6-.6V66h-2.4c-.3 0-.6-.3-.6-.6v-.7c0-.3.3-.6.6-.6H45v-2.4c0-.3.3-.6.6-.6h.7c.3 0 .6.3.6.6V64h2.4c.3 0 .6.3.6.6v.8zM70.5 15C68 15 66 17 66 19.5s2 4.5 4.5 4.5 4.5-2 4.5-4.5-2-4.5-4.5-4.5zm0 7c-1.4 0-2.5-1.1-2.5-2.5s1.1-2.5 2.5-2.5 2.5 1.1 2.5 2.5-1.1 2.5-2.5 2.5z" />
                        </svg>
                        <div class="subtitle text-center ">
                            <h4>Entretenimento</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!--//CATEGORY-->


    </div>

</div>
<!--//CATEGORYS-->



@include('site.footer')
