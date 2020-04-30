

<footer class="" id="footer-main">
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-dark bg-white nav-stilo fixed-bottom">
    <div class="container justify-content-center">
      <ul class="nav nav-pills nav-pills-circle " id="tabs_2" role="tablist">
       <!-- <li class="nav-item">
          <a href="">
            <div class="icon icon-shape bg-default  rounded-circle text-white">
              <i class="ni ni-bold-up"></i>
            </div>           
          </a>
        </li>    -->
        <li class="nav-item">
          <a href="{{route('site.menu.show', ['token' => $token,'id'])}}">
            <div class="icon icon-shape bg-gradient-warning  rounded-circle text-white">
              <i class="ni ni-building"></i>
            </div>
            <h6 class="text-dark text-center">Sobre </h6>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('site.menu.menu', ['token' => $token,'id'])}}">
            <div class="icon icon-shape bg-gradient-warning  rounded-circle text-white">
              <i class="ni ni-collection"></i>
            </div>
            <h6 class="text-dark text-center">Menu</h6>
          </a>
        </li>
    {{--  <li class="nav-item">
          <a href="{{ route('cart.checkout', ['token' => $token]) }}">
            <div class="icon icon-shape bg-gradient-warning  rounded-circle text-white">
              <i class="ni ni-cart"></i>
            </div>
            <h6 class="text-dark text-center">Pedidos</h6>
          </a>
        </li> 
        --}}
             
      </ul>
    </div>
    </div>
  </nav>
  
</footer>