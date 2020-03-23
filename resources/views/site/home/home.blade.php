@extends('site.layouts.master')


@section('content')
<div class="main-content">  
  <div class="header bg-white pt-5 pb-7">
    <div class="container">
      <div class="header-body">
        <div class="row align-items-center">
          <div class="col-lg-1">
          </div>
          <div class="col-lg-10">
            <div class="pr-5">
              <h1 class="display-1 text-dark font-weight-bold mb-0">Soluções em Cardápios Digitais </h1>
              <h2 class="display-4 text-dark font-weight-light">Todos os cardápios e promoções em um único lugar.</h2>

              <div class="mt-5">
                
              </div>
            </div>
          </div>
          <div class="col-lg-1">

          </div>
        </div>
      </div>
    </div>
  </div>

  </section> 
  <section class="section section-lg pt-lg-0 mt--7 bg-white">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-4">
              <div class="card card-lift--hover shadow border-0 bg-danger">
                <div class="card-body py-5">
                  <span class="icon icon-shape bg-gradient-white shadow rounded-circle text-danger"><i class="ni ni-building"></i></span>
                  <span class="alert-text text-white"><strong> CADASTRE</strong> seu negócio</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-lift--hover shadow border-6 bg-gradient-danger">
                <div class="card-body py-5">
                  <span class="icon icon-shape bg-gradient-white shadow rounded-circle text-danger"><i class="ni ni-collection"></i></span>
                  <span class="alert-text text-white"><strong>CRIE</strong> seu cardápio</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-lift--hover shadow border-0 bg-gradient-warning">
                <div class="card-body py-5">
                  <span class="icon icon-shape bg-gradient-white shadow rounded-circle text-warning"><i class="ni ni-world-2"></i></span>
                  <span class="alert-text text-white"><strong>COMPARTILHE</strong> seu cardápio</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>
</section>


<section class="py-6 bg-white">
  <div class="container">
    <div class="row row-grid align-items-center">
      <div class="col-md-6">
        <img src="{{asset('vendor/argon/assets/img/theme/cad_1.png')}}" class="img-fluid floating">
      </div>
      <div class="col-md-6">
        <div class="pr-md-5">
          <div class="alert alert-danger" role="alert">
            <span class="icon icon-shape bg-gradient-white shadow rounded-circle text-danger"><i class="ni ni-building"></i></span>
            <span class="alert-text"><strong> CADASTRE</strong> seu negócio</span>
          </div>
          <p>Nosso objetivo é melhorar seu negócio com soluções baseadas em cardápios digitais.</p>
          <a href="{{route('register')}}" class="font-weight-bold text-warning mt-5">Cadastre-se</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-6 bg-white">
  <div class="container">
    <div class="row row-grid align-items-center">
      <div class="col-md-6 order-md-2">
        <img src="{{asset('vendor/argon/assets/img/theme/cad_3.png')}}" class="img-fluid floating">
      </div>
      <div class="col-md-6 order-md-1">
        <div class="pr-md-5 text-dark">
          <div class="alert alert-danger bg-gradient-danger" role="alert">
            <span class="icon icon-shape bg-gradient-white shadow rounded-circle text-danger"><i class="ni ni-collection"></i></span>
            <span class="alert-text"><strong>CRIE</strong> seu cardápio</span>
          </div>
          <p> O cardappion é perfeito para o seu negócio, seja ele do tamanho que for. Informações e preços atualizadas
            de forma instantânea.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-6 bg-white">
  <div class="container">
    <div class="row row-grid align-items-center">
      <div class="col-md-6 ">
        <img src="{{asset('vendor/argon/assets/img/theme/landing-1.png')}}" class="img-fluid floating">
      </div>
      <div class="col-md-6">
        <div class="pr-md-5">
          <div class="alert alert-warning bg-gradient-warning" role="alert">
            <span class="icon icon-shape bg-gradient-white shadow rounded-circle text-warning"><i class="ni ni-world-2"></i></span>
            <span class="alert-text text-white"><strong>COMPARTILHE</strong> seu cardápio</span>
          </div>
          <p> Acesso aos itens que realmente estão sendo servidos no dia.</p>
          <a href="{{route('login')}}" class="font-weight-bold text-dark mt-5">Acessar conta</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-0 bg-dark">
  <div class="main-content">

    <div class="header  py-7 py-lg-7 pt-lg-4">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <span class="icon icon-shape bg-gradient-white shadow rounded-circle text-dark"><i class="ni ni-paper-diploma"></i></span>
              <span class="alert-text text-white"><strong>
                  <h1 class="text-white">Planos</h1>
                </strong> </span>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="pricing card-group flex-column flex-md-row mb-3">
            <div class="card card-pricing border-0 text-center mb-4">
              <div class="card-header bg-transparent">
                <h2 class="text-uppercase ls-1 text-dark py-3 mb-0"><b>MASTER</b></h2>
              </div>
              <div class="card-body px-lg-7">
                <div class="display-2">R$ 0,00</div>
                <span class="text-muted">por mês</span>
                <ul class="list-unstyled my-4">
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape bg-gradient-danger shadow rounded-circle text-white">
                          <i class="fas fa-terminal"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2">Configurar Perfil</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape bg-gradient-danger shadow rounded-circle text-white">
                          <i class="fas fa-terminal"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2">Cadastrar Produtos</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape bg-gradient-danger shadow rounded-circle text-white">
                          <i class="fas fa-terminal"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2">Cadastrar Promoções</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape bg-gradient-danger shadow rounded-circle text-white">
                          <i class="fas fa-terminal"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2">Criar Cardápio Digital</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape bg-gradient-danger shadow rounded-circle text-white">
                          <i class="fas fa-terminal"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2">Compartilhar Cardápio </span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape bg-gradient-danger shadow rounded-circle text-white">
                          <i class="fas fa-terminal"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2">Acessar Cardápio via QR Code</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape bg-gradient-danger shadow rounded-circle text-white">
                          <i class="fas fa-terminal"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2">...</span>
                      </div>
                    </div>
                  </li>
                </ul>
                <a href="{{route('register')}}" class="btn btn-warning my-2 ">Cadastre-se</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@stop
 