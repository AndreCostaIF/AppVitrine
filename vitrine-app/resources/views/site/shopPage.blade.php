@include("site.masterhead")

<div class="row mb-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{route('lojas',["informatica"])}}">Lojas de Informática</a></li>
            <li class="breadcrumb-item active" aria-current="page">NT informática</li>
        </ol>
    </nav>
</div>


<!--CAROUSEL-->
<div id="carouselExampleIndicators" class="carousel slide carouselShopPage" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
      
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="#"> <img class="d-block w-75 mx-auto" src="{{ url('site/assets/lojainfo.jpg') }}" alt="Primeiro Slide"> </a>
            <div class="carousel-caption d-none d-md-block">
                <h5>NT informática</h5>
                <p>A sua loja de informática</p>
              </div>
        </div>
        <div class="carousel-item">
            <a href="#"> <img class="d-block w-100" src="{{ url('site/assets/rog2.jpg') }}" alt="Segundo Slide"> </a>
        </div>
        
    </div>
   
</div>
<!--//CAROUSEL-->


<div class="title mt-5">
    <h2>Categorias</h2>
    <hr>
</div>


<div class="row">
    <!--Product Card-->
    <div class="col-sm-6 col-md-6 col-lg-4 mt-3 d-flex flex-column bg-light productCard border ">


        <div class="d-flex boxImg  justify-content-center">
            <div class="cardImg d-flex justify-content-center">
                <a href="#"><img src="{{ asset('site/assets/lap2.jpg') }}" alt="" class="img-fluid"></a>
            </div>
        </div>

        <div class="bodyCard mt-2 mb-2">
            <div class="title mt-2"><a href="#"><strong>Notebooks</strong> </a></div>
            
        </div>

        
    </div>
    <!--//Product Card-->

    <!--Product Card-->
    <div class="col-sm-6 col-md-6 col-lg-4 mt-3 d-flex flex-column bg-light productCard border ">


        <div class="d-flex boxImg  justify-content-center">
            <div class="cardImg d-flex justify-content-center">
                <a href="#"><img src="{{ asset('site/assets/jbl.jpg') }}" alt="" class="img-fluid"></a>
            </div>
        </div>

        <div class="bodyCard mt-2 mb-2">
            <div class="title mt-2"><a href="#"><strong>Fones de ouvido</strong> </a></div>
            
        </div>

        
    </div>
    <!--//Product Card-->

    <!--Product Card-->
    <div class="col-sm-6 col-md-6 col-lg-4 mt-3 d-flex flex-column bg-light productCard border ">


        <div class="d-flex boxImg  justify-content-center">
            <div class="cardImg d-flex justify-content-center">
                <a href="{{route('productListPage', ['ntinformatica', 3])}}"><img src="{{ asset('site/assets/iphone11.jpg') }}" alt="" class="img-fluid"></a>
            </div>
        </div>

        <div class="bodyCard mt-2 mb-2">
            <div class="title mt-2"><a href="#"><strong>Celulares e acessórios</strong> </a></div>
            
        </div>

        
    </div>
    <!--//Product Card-->
</div>

@include("site.footer")