<nav id="navbar-main" class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-dark bg-white nav-stilo fixed-top">
  <div class="container">
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon bg-dark "></span>
    </button>
    <a class="navbar-brand mx-auto" href="{{route('site')}}">
      <img src="{{asset('vendor/argon/assets/img/brand/logo4.png')}}" alt="{{ config('app.name') }}" class="img-fluid"style="width:215px; height:50px">
    </a>    
    <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
      <div class="navbar-collapse-header">
        <div class="row">
          <div class="col-6 collapse-brand"></div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>

      <ul class="navbar-nav align-items-lg-center ml-lg-auto">
      <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                <i class="ni ni-ui-04 d-lg-none"></i>
                <span class="nav-link-inner--text text-dark">Conheça</span>
              </a>
              <div class="dropdown-menu dropdown-menu-xl">
                <div class="dropdown-menu-inner">
                  <a href="" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-dark rounded-circle text-white">
                      <i class="ni ni-building"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-dark mb-md-1">Sobre Nós</h6>
                      <p class="description d-none d-md-inline-block mb-0">Todos os cardápios e promoções em um único lugar.</p>
                    </div>
                  </a>
                  <!-- <a href="./docs/foundation/colors.html" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-dark rounded-circle text-white">
                      <i class="ni ni-single-copy-04"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-dark mb-md-1">Termo de Uso</h6>
                      <p class="description d-none d-md-inline-block mb-0">Este termo de uso regulamenta a utilização da plataforma.</p>
                    </div>
                  </a> -->
                  <a href="" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-dark rounded-circle text-white">
                      <i class="ni ni-align-left-2"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-dark mb-md-1">Serviços</h6>
                      <p class="description d-none d-md-inline-block mb-0">Soluções em Cardápios Digitais.</p>
                    </div>
                  </a>
                  <a href="" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-dark rounded-circle text-white">
                      <i class="ni ni-paper-diploma"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-dark mb-md-1">Planos</h6>
                      <p class="description d-none d-md-inline-block mb-0">Conheça nossos planos e escolha o que mais combina com o seu negócio.</p>
                    </div>
                  </a>
                  <a href="" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-dark rounded-circle text-white">
                      <i class="ni ni-world"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-dark mb-md-1">Blog</h6>
                      <p class="description d-none d-md-inline-block mb-0">Todas as novidades em um único lugar.</p>
                    </div>
                  </a>
                  <a href="" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-dark rounded-circle text-white">
                      <i class="ni ni-email-83"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-dark mb-md-1">Contato</h6>
                      <p class="description d-none d-md-inline-block mb-0">info@cardappion.com.br</p>
                    </div>
                  </a>
                  <!-- <a href="./docs/getting-started/overview.html" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-dark rounded-circle text-white">
                      <i class="ni ni-mobile-button"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-dark mb-md-1">Download App</h6>
                      <p class="description d-none d-md-inline-block mb-0">Learn how to use Argon compiling Scss, change brand colors and more.</p>
                    </div>
                  </a>                  -->
                </div>
              </div>
            </li>
            
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="https://www.facebook.com/#" target="_blank" >
            <i class="fab fa-facebook-square text-default"></i>
            <span class="nav-link-inner--text d-lg-none text-dark">Facebook</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="https://www.instagram.com/#" target="_blank" >
            <i class="fab fa-instagram text-primary"></i>
            <span class="nav-link-inner--text d-lg-none text-dark">Instagram</span>
          </a>
        </li>
       

        
        <li class="nav-item">          
          <a href="{{route('register')}}" class="btn btn-warning my-2 ">Cadastre-se</a>
          <a href="{{route('login')}}" class="btn btn-dark my-2 ">Acessar conta </a>
        </li> 
        
      </ul>
    </div>
  </div>
</nav>


