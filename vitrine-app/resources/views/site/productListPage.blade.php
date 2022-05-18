@include('site.masterhead')

<div class="row mb-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{route('lojas',["informatica"])}}">Lojas de Informática</a></li>
            <li class="breadcrumb-item"><a href="{{route('shopPage',["ntinformatica"])}}">NT informática</a></li>
            <li class="breadcrumb-item active" aria-current="page">Celular e Acessórios</li>
        </ol>
    </nav>
</div>


<!--Trending Products-->
<div class="row mt-5">
    <div class="title">
        <h2>Celular e Acessórios</h2>
    </div>

    <div class="row">
        <!--Product Card-->
        <div class="col-sm-6 col-md-4 col-lg-3 bg-light d-flex flex-column productCard border mt-3">

            <div class="d-flex boxImg justify-content-center">
                <div class="cardImg d-flex justify-content-center">
                    <a href="{{route('productPage', ['ntinformatica','celulareacessorio','macbook'])}}"><img src="{{ asset('site/assets/laptop.jpg') }}" alt="" class="img-fluid"></a>
                </div>
            </div>


            <div class="bodyCard mt-2">
                <div class="subtitle"><a href="{{route('productPage', ['ntinformatica','celulareacessorio','macbook'])}}"> Apple MacBook Pro 15" Touch Bar MPTU2LL/A 256GB (Prata)</a>
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
                
                <div class="subtitle"><a href="#"> Apple Ipad Pro 12" Touch Bar MPTU2LL/A 256GB (Rosa)</a></div>
                
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
              
                <div class=""><a href="#">Notebook Acer Aspire 5 Intel Core i5-10210U, 8GB RAM, SSD 256GB,
                        15.6 Full HD, Windows 11 Home, Prata - A515-54-57CS </a></div>
                
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
               
                <div class="subtitle"><a href="#"> Console Playstation Ps4 PRO 1 TB, 1 controle</a></div>
                
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
               
                <div class="subtitle mt-2"><a href="#">NotebookAcer Aspire 5 Intel Core i5-10210U, 8GB RAM, SSD 256GB,
                        15.6 Full HD, Windows 11 Home, Prata - A515-54-57CS </a></div>
                
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
                    <a href="#"><img src="{{ asset('site/assets/iphone11.jpg') }}" alt="" class="img-fluid"></a>
                </div>
            </div>

            <div class="bodyCard mt-2 mb-2">
               
                <div class="subtitle mt-2"><a href="#">iPhone 11 Apple (64GB) Branco Tela 6,1" 4G Câmera 12MP iOS </a>
                </div>
                
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
               
                <div class="subtitle mt-2"><a href="#">Fone de Ouvido JBL Tune 500 On Ear Preto - JBLT500BLK </a>
                </div>
                
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
             
                <div class="subtitle mt-2"><a href="#">Camisa Polo Listra na Gola, Aramis, Masculino</a></div>
                
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

@include('site.footer')