<nav class="navbar navbar-top navbar-expand navbar-dark bg-dark border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
           
            <li class="nav-item ">
            <a class="nav-link" href="#" 
              data-toggle="tooltip" data-placement="bottom" title="Em breve!">
                <i class="ni ni-bell-55"></i>
              </a>
              
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#" 
              data-toggle="tooltip" data-placement="bottom" title="Suporte">
                <i class="text-white fab fa-whatsapp" > </i>
              </a>
              
            </li>
          </ul>
          <ul class="navbar-nav align-items-center ml-auto ml-md-0">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{asset('vendor/argon/assets/img/theme/team-4.jpg')}}">
                  </span>
                  
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Olá,</h6>
                </div>               
                <a href="#!" class="dropdown-item"  >
                  <i class="ni ni-circle-08"></i>
                  <span>{{ auth()->user()->name }}</span>
                </a>             
                       
                <div class="dropdown-divider"></div>
                <a href="{{route('logout')}}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="ni ni-button-power"></i>
                  <span>Sair</span>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">    
                  </form> 
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>