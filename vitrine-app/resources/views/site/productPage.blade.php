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
        <div class="boxProduct">
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
        <div class="row">

            <div class="productControl mt-3">
                <div class="buttonGroup  text-center">
                    <p>

                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Descrição <i class="bi bi-card-text"></i>
                        </button>
    
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                            data-bs-target="#Especification" aria-expanded="false" aria-controls="collapseExample">
                            Especificação <i class="bi bi-card-checklist"></i>
                        </button>
    
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                            data-bs-target="#Especification" aria-expanded="false" aria-controls="collapseExample">
                            Produtos relacionados <i class="bi bi-caret-down"></i>
                        </button>
    
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                            data-bs-target="#Especification" aria-expanded="false" aria-controls="collapseExample">
                           Duvidas <i class="bi bi-question-circle"></i>
                        </button>
                    </p>
                </div>
                
                <div class="collapse" id="collapseExample">
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

                <div class="collapse Especification" id="Especification">
                    <div class="card card-body">
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


        </div>

    </div>
    <div class="col-sm-6 col-md-6 col-lg-4 boxProductPrice">

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
                        <button class="btn btn-primary" type="submit" >Adicionar ao Carrinho <i class="bi bi-cart"></i></button>
                         
                    </div>
                    <div class="col-1 favoriteProd">
                        <a href="#"><i class="bi bi-suit-heart favorite"></i></a>
                    </div>

                    
                    
                </form>
            </div>
          </div>

          <div class="d-flex mt-4 flex-column bg-light">
            <div class="p-2 bd-highlight"> 
                <p class="subtitle">Retirar na loja <i class="bi bi-send-check"></i><br><span class="details">Logo após confirmação</span></p>  
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

          
    </div>
</div>

@include('site.footer')
