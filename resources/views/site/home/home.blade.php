@extends('site.layouts.master')


@section('content')

<div class="main-content mt-6">
  <div class="header bg-default pt-5 pb-7">
    <div class="container">
      <div class="header-body">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="pr-5">
              <h1 class="display-2 text-white font-weight-bold mb-0">SEU cardápio agora pode ser online</h1>
              <h2 class="display-4 text-white font-weight-light">e SEM custos :D</h2>
              <p class="text-white mt-4">Uma solução completa para o seu negócio (seja grande ou pequeno), fácil de usar e <b> TOTALMENTE GRÁTIS! </b></p>
              <div class="mt-5">
                <a data-toggle="modal" data-target="#modal-register" class="btn btn-neutral text-primary my-2">Cadastre-se </a>
                <a data-toggle="modal" data-target="#modal-login" class="btn btn-default my-2 text-white">Acesse sua Conta</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row pt-5">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white shadow mb-4">
                      <i class="ni ni-building"></i>
                    </div>
                    <h5 class="h3">Perfil</h5>
                    <p>Configure as informações do seu estabelecimento</p>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white shadow mb-4">
                      <i class="ni ni-collection"></i>
                    </div>
                    <h5 class="h3">Menu</h5>
                    <p>Cadastre, edite, apague e vincule os produtos disponíveis ao seu menu</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 pt-lg-5 pt-4">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white shadow mb-4">
                      <i class="ni ni-bullet-list-67"></i>
                    </div>
                    <h5 class="h3">Produtos</h5>
                    <p>Cadastre, edite e apague seus produtos facilmente</p>
                  </div>
                </div>
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white shadow mb-4">
                      <i class="ni ni-world-2 "></i>
                    </div>
                    <h5 class="h3">Landing Page</h5>
                    <p>Compartilhe seu cardápio através do link e QRcode</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal register -->
    <div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="modal-register" aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">

          <div class="modal-body p-0">


            <div class="card border-0 mb-0">

              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <small>Utilize o formulário para <b> cadastrar </b> sua conta</small>
                </div>
                <form method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-settings-gear-65"></i></span>
                      </div>
                      <input id="tenant" type="text" placeholder="Nome do negócio" class="form-control{{ $errors->has('tenant') ? ' is-invalid' : '' }}" name="tenant" value="{{ old('tenant') }}" required autofocus>

                      @if ($errors->has('tenant'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('tenant') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                      </div>
                      <input id="name" type="text" placeholder="Nome completo" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                      @if ($errors->has('name'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input id="email" type="email" placeholder="E-mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                      @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input id="password" type="password" placeholder="Senha" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                      @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input id="password-confirm" type="password" placeholder="Repita sua Senha" class="form-control" name="password_confirmation" required>
                           
                     
                    </div>
                  </div>




                  <div class="text-center">
                    <button type="submit" class="btn btn-neutral my-2  my-4">Cadastrar</button>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
      </div>


      <!-- Modal Entrar -->
      <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
          <div class="modal-content">

            <div class="modal-body p-0">


              <div class="card border-0 mb-0">

                <div class="card-body px-lg-5 py-lg-5">
                  <div class="text-center text-muted mb-4">
                    <small>Utilize o formulário para <b> entrar </b> na sua conta</small>
                  </div>
                  <form role="form" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="E-mail" type="email" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Senha" type="password" name="password">
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                   
                    <div class="text-center">
                      <button type="submit" class="btn btn-neutral my-2  my-4">Entrar</button>
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>


      </div>



      @stop