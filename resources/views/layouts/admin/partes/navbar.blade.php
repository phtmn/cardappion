<nav id="navbar-main" class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-dark bg-white nav-stilo">
  <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand mx-auto" href="{{route('site')}}">
      <img src="{{asset('vendor/argon/assets/img/brand/logo2.png')}}" alt="{{ config('app.name') }}" class="img-fluid"style="width:215px; height:50px">
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
      <!-- <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                <i class="ni ni-ui-04 d-lg-none"></i>
                <span class="nav-link-inner--text">Conheça</span>
              </a>
              <div class="dropdown-menu dropdown-menu-xl">
                <div class="dropdown-menu-inner">
                  <a href="./docs/getting-started/overview.html" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                      <i class="ni ni-spaceship"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-primary mb-md-1">Sobre Nós</h6>
                      <p class="description d-none d-md-inline-block mb-0">Learn how to use Argon compiling Scss, change brand colors and more.</p>
                    </div>
                  </a>
                  <a href="./docs/foundation/colors.html" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                      <i class="ni ni-palette"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-primary mb-md-1">Termo de Uso</h6>
                      <p class="description d-none d-md-inline-block mb-0">Learn more about colors, typography, icons and the grid system we used for Argon.</p>
                    </div>
                  </a>
                  <a href="./docs/getting-started/overview.html" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                      <i class="ni ni-spaceship"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-primary mb-md-1">Serviços</h6>
                      <p class="description d-none d-md-inline-block mb-0">Learn how to use Argon compiling Scss, change brand colors and more.</p>
                    </div>
                  </a>
                  <a href="./docs/getting-started/overview.html" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                      <i class="ni ni-spaceship"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-primary mb-md-1">Planos</h6>
                      <p class="description d-none d-md-inline-block mb-0">Learn how to use Argon compiling Scss, change brand colors and more.</p>
                    </div>
                  </a>
                  <a href="./docs/getting-started/overview.html" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                      <i class="ni ni-spaceship"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-primary mb-md-1">Download App</h6>
                      <p class="description d-none d-md-inline-block mb-0">Learn how to use Argon compiling Scss, change brand colors and more.</p>
                    </div>
                  </a>                 
                </div>
              </div>
            </li> -->

            <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard.index')}}">
                            <i class="ni ni-tv-2 text-dark"></i>
                            <span class="nav-link-text text-dark">Dashboard</span>
                        </a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('config.createEdit')}}">
                            <i class="ni ni-settings-gear-65 text-dark"></i>
                            <span class="nav-link-text text-dark">Configurações</span>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('products.index')}}">
                            <i class="ni ni-bullet-list-67 text-dark"></i>
                            <span class="nav-link-text text-dark">Produtos</span>
                        </a>
                    </li>
                  <li class="nav-item">
                        <a class="nav-link" href="{{route('promotions.index')}}">
                            <i class="ni ni-notification-70 text-dark"></i>
                            <span class="nav-link-text text-dark">Promoções</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('menus.index')}}">
                            <i class="ni ni-collection text-dark"></i>
                            <span class="nav-link-text text-dark">Menu</span>
                        </a>
                    </li>    
      
       

        
        <!-- <li class="nav-item">          
          <a href="{{route('register')}}" class="btn btn-primary my-2 ">Cadastre-se</a>
          <a href="{{route('login')}}" class="btn btn-secondary my-2 ">Acessar conta </a>
        </li>  -->
        
       
      
        

      </ul>
    </div>
  </div>
</nav>






<nav class="navbar navbar-expand-lg navbar-dark bg-black " >
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="">
    <span class="navbar-toggler-icon "></span>
  </button>

  <a class="navbar-brand mx-auto" href="#">
    <img src="{{asset('vendor/argon/assets/img/brand/logo2.png')}}" width="215px" height="50px"  alt="">
    
  </a>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-black" id="sidenav-main">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <!-- <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon "></span>
  </button> -->
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bg-light"></span>
      </button> -->

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      
     
                 <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard.index')}}">
                            <i class="ni ni-tv-2 text-white"></i>
                            <span class="nav-link-text text-white">Dashboard</span>
                        </a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('config.createEdit')}}">
                            <i class="ni ni-settings-gear-65 text-white"></i>
                            <span class="nav-link-text text-white">Configurações</span>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('products.index')}}">
                            <i class="ni ni-bullet-list-67 text-white"></i>
                            <span class="nav-link-text text-white">Produtos</span>
                        </a>
                    </li>
                  <li class="nav-item">
                        <a class="nav-link" href="{{route('promotions.index')}}">
                            <i class="ni ni-notification-70 text-white"></i>
                            <span class="nav-link-text text-white">Promoções</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('menus.index')}}">
                            <i class="ni ni-collection text-white"></i>
                            <span class="nav-link-text text-white">Menu</span>
                        </a>
                    </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item">
    <a class="nav-link" href="{{ Auth::user()->tenant->url_token }}" data-toggle="tooltip" data-placement="bottom" target="_blank">
    <i class="ni ni-world-2 text-white"></i>  
    <span class="nav-link-text text-white">{{ Auth::user()->tenant->url_token }} </span>
            </a>
            </li>
        
            
         
        <li class="nav-item">
        
        <!-- <a href="{{route('logout')}}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <i class="ni ni-button-power text-white"></i>
                      <span class="nav-link-text text-white">Sair</span>
                    
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a> -->
                    </form>
                    <a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="ni ni-button-power text-white"> Sair</i> 
        </a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>            
        
        </li>
        </ul>
        
  </div>
</nav>
