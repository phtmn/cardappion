<nav class="navbar navbar-expand-lg navbar-light bg-dark" id="sidenav-main">
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
        
        <a href="{{route('logout')}}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <i class="ni ni-button-power text-white"></i>
                      <span class="nav-link-text text-white">Sair</span>
                    
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                    
        
        </li>
        </ul>
        </form>
  </div>
</nav>
