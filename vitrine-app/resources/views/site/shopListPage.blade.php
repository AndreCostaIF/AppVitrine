@include('site.masterhead')

<div class="row">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lojas de Informática</li>
        </ol>
    </nav>
</div>

<div class="row mt-3">
    <h2 class="title">Lojas de Informática</h2>

    <div class="row mt-2">

        <!--Product Card-->
        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 d-flex flex-column bg-light productCard border">


            <div class="d-flex boxImg  justify-content-center">
                <div class="cardImg d-flex justify-content-center">
                    <a href="{{route('shopPage', ['ntinfomartica'])}}"><img src="{{ asset('site/assets/lojainfo.jpg') }}" alt="" class="img-fluid"></a>
                </div>
            </div>

            <div class="bodyCard mt-2 mb-2">
                <div class="subtitle mt-2"><a href="{{route('shopPage', ['ntinfomartica'])}}"><strong>NT Informática</strong> </a></div>
                <div class="subtitle mt-2 opacity-75">Endereço: Rua Exemplo N° 100</div>
            </div>

            <div class="footerCard mt-auto d-flex justify-content-between">
                <div class="priceCard">
                    <a href="">
                        <b h ref="{{route('shopPage', ['ntinfomartica'])}}" class="d-flex align-items-end"> Ver Loja</b></a>
                </div>

                <div class="controlCard mt-auto">
                    <a href="#"><i class="bi bi-suit-heart favorite"></i></a>

                </div>

            </div>

        </div>
        <!--//Product Card-->


        <!--Product Card-->
        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 d-flex flex-column bg-light productCard border ">


            <div class="d-flex boxImg  justify-content-center">
                <div class="cardImg d-flex justify-content-center">
                    <a href="#"><img src="{{ asset('site/assets/loja2.jpg') }}" alt="" class="img-fluid"></a>
                </div>
            </div>

            <div class="bodyCard mt-2 mb-2">
                <div class="subtitle mt-2"><a href="#"><strong>Loja Centro</strong> </a></div>
                <div class="subtitle mt-2 opacity-75">Endereço: Rua Exemplo N° 100</div>
            </div>

            <div class="footerCard mt-auto d-flex justify-content-between">
                <div class="priceCard">
                    <a href="">
                        <b h ref="" class="d-flex align-items-end"> Ver Loja</b></a>
                </div>

                <div class="controlCard mt-auto">
                    <a href="#"><i class="bi bi-suit-heart favorite"></i></a>

                </div>

            </div>

        </div>
        <!--//Product Card-->

        <!--Product Card-->
        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 d-flex flex-column bg-light productCard border ">


            <div class="d-flex boxImg  justify-content-center">
                <div class="cardImg d-flex justify-content-center">
                    <a href="#"><img src="{{ asset('site/assets/loja3.png') }}" alt="" class="img-fluid"></a>
                </div>
            </div>

            <div class="bodyCard mt-2 mb-2">
                <div class="subtitle mt-2"><a href="#"><strong>Lojas Colombo</strong> </a></div>
                <div class="subtitle mt-2 opacity-75">Endereço: Rua Exemplo N° 100</div>
            </div>

            <div class="footerCard mt-auto d-flex justify-content-between">
                <div class="priceCard">
                    <a href="">
                        <b h ref="" class="d-flex align-items-end"> Ver Loja</b></a>
                </div>

                <div class="controlCard mt-auto">
                    <a href="#"><i class="bi bi-suit-heart favorite"></i></a>

                </div>

            </div>

        </div>
        <!--//Product Card-->

        <!--Product Card-->
        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 d-flex flex-column bg-light productCard border ">


            <div class="d-flex boxImg  justify-content-center">
                <div class="cardImg d-flex justify-content-center">
                    <a href="#"><img src="{{ asset('site/assets/loja4.png') }}" alt="" class="img-fluid"></a>
                </div>
            </div>

            <div class="bodyCard mt-2 mb-2">
                <div class="subtitle mt-2"><a href="#"><strong>C & A</strong> </a></div>
                <div class="subtitle mt-2 opacity-75">Endereço: Rua Exemplo N° 100</div>
            </div>

            <div class="footerCard mt-auto d-flex justify-content-between">
                <div class="priceCard">
                    <a href="">
                        <b h ref="" class="d-flex align-items-end"> Ver Loja</b></a>
                </div>

                <div class="controlCard mt-auto">
                    <a href="#"><i class="bi bi-suit-heart favorite"></i></a>

                </div>

            </div>

        </div>
        <!--//Product Card-->

        <!--Product Card-->
        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 d-flex flex-column bg-light productCard border ">


            <div class="d-flex boxImg  justify-content-center">
                <div class="cardImg d-flex justify-content-center">
                    <a href="#"><img src="{{ asset('site/assets/LOJA5.jpg') }}" alt="" class="img-fluid"></a>
                </div>
            </div>

            <div class="bodyCard mt-2 mb-2">
                <div class="subtitle mt-2"><a href="#"><strong>Body Shop</strong> </a></div>
                <div class="subtitle mt-2 opacity-75">Endereço: Rua Exemplo N° 100</div>
            </div>

            <div class="footerCard mt-auto d-flex justify-content-between">
                <div class="priceCard">
                    <a href="">
                        <b h ref="" class="d-flex align-items-end"> Ver Loja</b></a>
                </div>

                <div class="controlCard mt-auto">
                    <a href="#"><i class="bi bi-suit-heart favorite"></i></a>

                </div>

            </div>

        </div>
        <!--//Product Card-->

        <!--Product Card-->
        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 d-flex flex-column bg-light productCard border ">
               

            <div class="d-flex boxImg  justify-content-center">
                <div class="cardImg d-flex justify-content-center">
                    <a href="#"><img src="{{ asset('site/assets/loja6.jpg') }}" alt=""
                            class="img-fluid"></a>
                </div>
            </div>

            <div class="bodyCard mt-2 mb-2">
                <div class="subtitle mt-2"><a href="#"><strong>Bellac Boutique</strong> </a></div>
                <div class="subtitle mt-2 opacity-75">Endereço: Rua Exemplo N° 100</div>
            </div>

            <div class="footerCard mt-auto d-flex justify-content-between">
                <div class="priceCard">
                    <a href="">
                        <b h ref="" class="d-flex align-items-end"> Ver Loja</b></a>
                </div>

                <div class="controlCard mt-auto">
                    <a href="#"><i class="bi bi-suit-heart favorite"></i></a>

                </div>

            </div>
           
        </div>
        <!--//Product Card-->



    </div>
</div>





@include('site.footer')
