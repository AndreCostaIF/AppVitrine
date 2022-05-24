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
    @if (isset($data[0]))

        <h2 class="title">Lojas de {{ $data[0]['businessCategory']['name'] }}</h2>

        <div class="row mt-2">
            
            @foreach ($data as $store)
                <!--Product Card-->
                <div class="col-sm-6 col-md-6 col-lg-4 mt-3 d-flex flex-column bg-light productCard border">


                    <div class="d-flex boxImg  justify-content-center">
                        <div class="cardImg d-flex justify-content-center">
                            <a href="{{ route('shopPage', ['ntinfomartica']) }}"><img
                                    src="{{ asset('site/assets/lojainfo.jpg') }}" alt="" class="img-fluid"></a>
                        </div>
                    </div>

                    <div class="bodyCard mt-2 mb-2">
                        <div class="subtitle mt-2"><a href="{{ route('shopPage', ['ntinfomartica']) }}"><strong>{{$store['fantasyName']}}</strong> </a></div>
                        <!--Endereço aqui ta null, arruma ae doidao-->
                        <div class="subtitle mt-2 opacity-75">Endereço: {{$store['addressStore']}} N° 100</div>
                    </div>

                    <div class="footerCard mt-auto d-flex justify-content-between">
                        <div class="priceCard">
                            <a href="">
                                <b h ref="{{ route('shopPage', ['ntinfomartica']) }}" class="d-flex align-items-end">
                                    Ver
                                    Loja</b></a>
                        </div>

                        <div class="controlCard mt-auto">
                            <a href="#"><i class="bi bi-suit-heart favorite"></i></a>

                        </div>

                    </div>

                </div>
                <!--//Product Card-->
            @endforeach
        @else
            <h2 class="title">Não há lojas nesse Departamento :(</h2>
    @endif








    



</div>
</div>





@include('site.footer')
