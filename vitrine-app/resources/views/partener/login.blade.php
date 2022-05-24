@include('partener.masterheadPartener')
<div class="row">
    <h2 class="title">PORTAL DO PARCEIRO</h2>
</div>


    <div class="row justify-content-center ">
        <div class="col-6 bg-login pt-5 pb-5 d-flex flex-column align-items-end ">
            <div class="d-flex titleForm justify-content-between align-items-center mb-3 ">
                <div>
                    <h5 class="title">entrar</h5>
                   
                    
                </div>

                <div>
                    <a href="" class="google"> <i class="bi bi-google"></i></a>
                </div>


            </div>
            <form action="#" class="col-lg-6 formLogin ">
                <div class="form-floating mb-3 ">
                    <input type="email" class="form-control " id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Senha</label>
                </div>

                <div class="form-floating mt-3">
                    <button type="submit" class="btn botao-primario w-100 ">Entrar</button>
                </div>

                <div class="form-floating mt-3 d-flex justify-content-end">
                  <small><a href="">Esqueci minha senha</a> </small>
                </div>

                <div class="form-floating mt-3">
                  <p>Não é nosso parceiro? <a href="" class="customLink">Seja parceiro!</a> </p>
              </div>

            </form>
        </div>


    </div>



@include('site.footer')
