<!-- <nav id="navbar-main" class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-dark bg-white nav-stilo headroom "> -->
<nav id="navbar-main" class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-dark bg-white nav-stilo fixed-top">
  <!-- <nav id="navbar-main" class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-dark bg-white nav-stilo fixed-top"> -->
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
      aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon bg-dark"></span>
    </button>
    <a class="navbar-brand mx-auto" href="{{route('site')}}">
      <img src="{{asset('vendor/argon/assets/img/brand/logo_sem_slogan.png')}}" alt="{{ config('app.name') }}" class="img-fluid"
        style="width:215px; height:50px">
    </a>
    <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
      <div class="navbar-collapse-header">
        <div class="row">
          <div class="col-6 collapse-brand">
          
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse"
              aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>

      <ul class="navbar-nav align-items-lg-center ml-lg-auto  navbar-nav-hover ">
      
    
        <li class="nav-item ">
          <a href="https://blog.cardappion.com.br" class="nav-link" role="button">
            
            <span class="nav-link-inner--text text-dark"><b>Blog</b></span>
          </a>

          
          
        </li>
       

        
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="https://www.facebook.com/cardappion" target="_blank" >
            <i class="fab fa-facebook-square text-default"></i>
            <span class="nav-link-inner--text d-lg-none text-dark">Facebook</span>
          </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="https://www.instagram.com/cardappion" target="_blank">
            <i class="fab fa-instagram text-primary"></i>
            <span class="nav-link-inner--text d-lg-none text-dark">Instagram</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="https://www.linkedin.com/company/cardappion/" target="_blank">
            <i class="fab fa-linkedin text-primary"></i>
            <span class="nav-link-inner--text d-lg-none text-dark">Linkedin</span>
          </a>
        </li>

      

        @guest
        <li class="nav-item">
          <a href="{{route('register')}}" class="btn btn-secondary my-2 text-warning">Cadastre-se</a>
          <a href="{{route('login')}}" class="btn btn-secondary my-2 text-warning">Acessar conta </a>
        </li>
        @endguest
        

        @auth
        <li class="nav-item">
          <a href="{{route('dashboard.index')}}" class="btn btn-secondary my-2 text-warning">Voltar ao Dashboard</a>
          
        </li>
        @endauth

      </ul>
    </div>
  </div>
  
</nav>
