<!DOCTYPE html>
<html>

@include('layouts.site._head')
<body class="bg-dark">
@include('layouts.site._nav')
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-white pt-5 pb-7">
      <div class="container">
        <div class="header-body text-center mb-4">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-dark">Bem vindo!</h1>
              <p class="text-lead text-dark">Utilize o formulário para acessar sua conta</p>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-secondary" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div> -->
    </div>
    <!-- Page content -->
    <div class="container mt--7 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-7">
          <!-- <div class="card bg-secondary border-0 mb-0"> -->
          <div class="card  border-0 mb-0">
            <!-- <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-3"><small>Entre com</small></div>
              <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="../../assets/img/icons/common/github.svg"></span>
                  <span class="btn-inner--text">Facebook</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="../../assets/img/icons/common/google.svg"></span>
                  <span class="btn-inner--text">Google</span>
                </a>
              </div>
            </div> -->
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <!-- <small class="font-weight-bold">Bem vindo!</small> -->
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
                  </div>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <!-- <input class="custom-control-input" id=" customCheckLogin" type="checkbox"> -->
                  
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-dark my-2">Acessar conta</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <!-- <a href="#" class="text-light"><small>Esqueci a senha?</small></a> -->
            </div>
            <div class="col-6 text-right">
              <a href="{{route('register')}}" class="text-white"><small><b>Cadastre-se</b></small></a>
            </div>
          </div>
        </div>
      </div> 
    </div>
  </div>
  
</body>
</html>
