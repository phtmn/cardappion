<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>cardappion</title>
  <!-- Extra dtails for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-pro" />

  <!-- Favicon -->
  <link rel="icon" href="{{asset('vendor/argon/assets/img/brand/icon2.png')}}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('vendor/argon/assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('vendor/argon/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('vendor/argon/assets/css/argon.min.css?v=1.0.0')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('vendor/argon/assets/css/stilo.css')}}" type="text/css">
  <!-- Google Tag Manager -->
  <!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NKDMSK6');</script> -->
  <!-- End Google Tag Manager -->
</head>

<body class="bg-black">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-dark bg-black">
    <div class="container">
    <a class="navbar-brand mx-auto" href="{{route('site')}}">
        <img src="{{asset('vendor/argon/assets/img/brand/logo2.png')}}" style="width: 215px; height:50px;">
      </a>
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="">
                <!-- <img src="{{asset('vendor/argon/assets/img/brand/logo2.png')}}"> -->
              </a>
            </div>

            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav mr-auto">

          <li class="nav-item">
            <a href="" class="nav-link">
              <span class="nav-link-inner--text">Sobre Nós</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <span class="nav-link-inner--text">Serviços</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <span class="nav-link-inner--text">Planos</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <span class="nav-link-inner--text">Download App</span>
            </a>
          </li>

        </ul>
        <hr class="d-lg-none" />
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="#" target="_blank" >
              <i class="fab fa-facebook-square"></i>
              <span class="nav-link-inner--text d-lg-none">Facebook</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="#" target="_blank">
              <i class="fab fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->

  <div class="main-content">
    <!-- Header -->
    <div class="header bg-black pt-5 pb-7">
      <div class="container">
        <div class="header-body text-center mb-4">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <!-- :<h1 class="text-white">Cadastre aqui seu negócio</h1> -->
              <!-- <p class="text-lead text-white">Utilize o formulario para entrar no painel.</p> -->
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
    <div class="container mt--9 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-7">
          <!-- <div class="card bg-secondary border-0 mb-0"> -->
          <div class="card bg-black border-0 mb-0">
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
                <small>Cadastre aqui seu negócio</small>
              </div>
              <form method="POST" action="{{ route('register') }}">
                        @csrf

              <div class="form-group mb-3">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-append">
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

              <div class="form-group ">
              <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-append">
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
                            <div class="input-group-append">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
          </div>
               
                                <input id="email" type="email"  placeholder="E-mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">
                        <div class="input-group input-group-merge input-group-alternative"> 
                            <div class="input-group-append">
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

                        <div class="form-group ">
                        <div class="input-group input-group-merge input-group-alternative">    
                            <div class="input-group-append">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
          </div>
                         
                                <input id="password-confirm" type="password" placeholder="Repita sua Senha" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        
                            <div class="text-center">
                                <button type="submit" class="btn btn-azul">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        
                    </form>
                    </div>
            </div>
         
          <div class="row mt-3">
            <div class="col-6">
              <!-- <a href="#" class="text-light"><small>Esqueci a senha?</small></a> -->
            </div>
            <div class="col-6 text-right">
              <a href="{{route('login')}}" class="text-verd"><small>Acessar conta</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  
  <!-- Footer -->
  <!-- <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer> -->
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{asset('vendor/argon/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/argon/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/argon/assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{asset('vendor/argon/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{asset('vendor/argon/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <script src="{{asset('vendor/argon/assets/vendor/lavalamp/js/jquery.lavalamp.min.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset('vendor/argon/assets/js/argon.min.js?v=1.0.0')}}"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="{{asset('vendor/argon/assets/js/demo.min.js')}}"></script>
</body>

</html>
