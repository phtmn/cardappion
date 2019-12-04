@extends('layouts.admin.master')
@section('cabecalho')
<div class="header bg-white pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">

          <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
            <i class="ni ni-tv-2"></i>
          </div>
          <h3 class="display-5 text-dark d-inline-block mb-0"> Dashboard</h3>

        </div>

      </div>
    </div>
  </div>
</div>
@stop

@section('conteudo')

<div class="container-fluid mt--6">

  <!-- 1 -->
  <div class="row">
    <div class="col-xl-3 col-md-6">
      <div class="card card-stats">
        <a href="{{route('config.createEdit')}}" class="media d-flex align-items-center">
          <div class="card-body">
            <div class="row">

              <div class="col">
                <!-- <h5 class="card-title text-uppercase text-muted mb-0">Perfil</h5> -->
                <span class="h2 font-weight-bold mb-0">Perfil</span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-gradient-warning text-white rounded-circle shadow">
                  <i class="ni ni-badge"></i>
                </div>
              </div>
            </div>
            <!-- <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
          </div>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card card-stats">
        <a href="{{route('products.index')}}" class="media d-flex align-items-center">
          <div class="card-body">
            <div class="row">

              <div class="col">
                <!-- <h5 class="card-title text-uppercase text-muted mb-0">Perfil</h5> -->
                <span class="h2 font-weight-bold mb-0">Pedidos</span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-gradient-warning text-white rounded-circle shadow">
                  <i class="ni ni-bullet-list-67"></i>
                </div>
              </div>
            </div>
            <!-- <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-nowrap">Total de Produtos</span>
                    <span class="text-primary mr-2">  </span>
                  </p> -->
          </div>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card card-stats">
        <a href="{{route('promotions.index')}}" class="media d-flex align-items-center">
          <div class="card-body">
            <div class="row">

              <div class="col">
                <!-- <h5 class="card-title text-uppercase text-muted mb-0">Perfil</h5> -->
                <span class="h2 font-weight-bold mb-0">Promoções</span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-gradient-warning text-white rounded-circle shadow">
                  <i class="ni ni-notification-70"></i>
                </div>
              </div>
            </div>
            <!-- <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
          </div>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card card-stats">
        <a href="{{route('menus.index')}}" class="media d-flex align-items-center">
          <div class="card-body">
            <div class="row">

              <div class="col">
                <!-- <h5 class="card-title text-uppercase text-muted mb-0">Perfil</h5> -->
                <span class="h2 font-weight-bold mb-0">Menu</span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-gradient-warning text-white rounded-circle shadow">
                  <i class="ni ni-collection"></i>
                </div>
              </div>
            </div>
            <!-- <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
          </div>
        </a>
      </div>
    </div>
  </div>
  <!-- 2 -->
  <div class="row">
    <div class="col-xl-6">
      <div class="card">
        <div class="card-header">



          <span class="nav-link-text text-warning"> Olá, {{ auth()->user()->name }}<span
              class="font-weight-light"></span> </span>

          <small class="d-block text-muted font-weight-900">{{ Auth::user()->tenant->name }}</small>
        </div>

        <div class="card-header d-flex align-items-center">
          <div class="d-flex align-items-center">
            <div class="icon icon-shape bg-gradient-warning text-white rounded-circle shadow">
              <i class="ni ni-email-83"></i>
            </div>
            <div class="mx-3">
              <!-- <a href="#" class="text-dark font-weight-600 text-sm">Em caso de dúvidas, críticas e/ou sugestões </a> -->
              <a href="#" class="text-dark font-weight-600 text-sm">Podemos conversar em </a>
              <small class="d-block text-muted">info@cardappion.com.br</small>
            </div>
          </div>
          <!-- <div class="text-right ml-auto">
                <button type="button" class="btn btn-sm btn-primary btn-icon">
                  <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                  <span class="btn-inner--text">Atualizar</span>
                </button>
              </div> -->


        </div>
        <div class="card-header d-flex align-items-center">
          <div class="d-flex align-items-center">
            <div class="icon icon-shape bg-gradient-warning text-white rounded-circle shadow">
              <i class="ni ni-paper-diploma"></i>
            </div>
            <div class="mx-3">
              <a href="#" class="text-dark font-weight-600 text-sm">Você possui o Plano</a>
              <small class="d-block text-muted">MASTER</small>
            </div>
          </div>
          <div class="text-right ml-auto">
            <!-- <button type="button" class="btn btn-sm btn-primary btn-icon">
                  <span class="btn-inner--text">Alterar Plano</span>
                </button> -->
          </div>


        </div>

        <div class="card-body">
          <p class="mb-0">
            Neste Plano você pode:

          </p>

          <img alt="Image placeholder" src="{{ asset('vendor/argon/assets/img/brand/master.png') }}"
            class="img-fluid floating">


        </div>

      </div>
    </div>


    <div class="col-xl-6">
      <div class="card">
        <div class="card-header">
          <a href="{{ Auth::user()->tenant->url_token }}" target="_blank" class="media d-flex align-items-center">
            <div class="icon icon-shape bg-gradient-white rounded-circle text-dark">
              <i class="ni ni-world-2 text-warning"></i>
            </div>
            <span class="nav-link-text text-warning">Landing Page </span>
          </a>
          <div class="mx-3">
            <small class="d-block text-muted font-weight-900">{{ Auth::user()->tenant->url_token }}</small>
            <button class="btn btn-sm btn-primary mt-2" type="button" data-toggle="collapse"
              data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              Alterar Link <i class="ni ni-bold-down"></i>
            </button>
            @if($errors->has('link'))
                  <span class="help-block text-danger "><b>{{ $errors->first('link') }}</b></span>
                  @endif
          </div>
         
          <p>

          </p>
          <div class="collapse" id="collapseExample">
            <div class="card card-body ">
              <form action="{{ route('menu.link') }}" method="POST">
                @csrf
                <div class="form-row align-items-center">
                  <div class="col-auto">
                    <label class="sr-only" for="inlineFormInputGroup">Username</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        
                        <input type="text" class="form-control" id="inlineFormInputGroup" name="token" placeholder="" value="{{ Auth::user()->tenant->token }}" required>
                        
                        
                      </div>
                      <!-- <input type="text" class="form-control" id="inlineFormInputGroup" name="token" placeholder=""> -->
                    </div>
                  </div>
                  <div class="col-auto">
                    <button type="submit"
                      class="btn btn-block btn-outline-primary btn-sm btn-round mb-2">Alterar</button>
                  </div>
                 
                </div>
              </form>
            </div>
          </div>

          <hr> <b>DICA 1:</b> Compartilhe o <b> <i> link </b> </i> de sua Landing Page para seus clientes em
          <i class="fab fa-facebook-square text-default"></i>
          <i class="fab fa-instagram text-primary"></i>
          <i class="fab fa-whatsapp text-success"></i> e muito mais!
          <hr> <b>DICA 2:</b> Disponibilize o <b> <i> qrcode </b> </i> da sua Landing Page para seus clientes em
          panfletos, cardápio e materiais de divulgação!
        </div>
        <div class="card-header d-flex align-items-center mx-3 ">
          {!! QrCode::size(500)->generate(Auth::user()->tenant->url_token); !!}


        </div>





      </div>
    </div>


  </div>





</div>

</div>



@stop
