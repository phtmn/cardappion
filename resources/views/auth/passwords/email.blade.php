<!DOCTYPE html>
<html>

@include('site.layouts._head')
<body class="bg-gradient-default">
@include('site.layouts._nav')

 
<div class="main-content">
    <!-- Header -->
    <div class="header bg-white pt-5 pb-7">
      <div class="container">
        <div class="header-body text-center mb-4">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-dark">Esqueceu sua senha?</h1>
              <p class="text-lead text-dark">Utilize o formulário para alterar sua senha</p>
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
        <div class="col-md-8">
            <div class="card">
            <div class="text-center text-muted mb-4">
                <!-- <small class="font-weight-bold">Bem vindo!</small> -->
              </div>
                <!-- <div class="card-header">{{ __('Esqueceu sua senha?') }}</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right text-dark">{{ __('E-mail') }}</label>

                            <div class="col-md-6">

                            
                            <input required class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="E-mail" type="email" name="email" value="{{ old('email') }} ">
                                <!-- <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required> -->

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn btn-outline-default my-2">
                                    {{ __('Enviar senha para e-mail') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 
</body>
</html>
