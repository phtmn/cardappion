<nav id="navbar-main" class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-dark bg-white nav-stilo">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bg-dark"></span>
        </button>
        <a class="navbar-brand mx-auto" href="{{route('site')}}">
            <img src="{{asset('vendor/argon/assets/img/brand/logo4.png')}}" alt="{{ config('app.name') }}" class="img-fluid" style="width:215px; height:50px">
        </a>
        <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                    <!-- <img src="{{asset('vendor/argon/assets/img/brand/logo2.png')}}" alt="{{ config('app.name') }}" class="" style="width:215px; height:50px"> -->

                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler " data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>

            <ul class="navbar-nav align-items-lg-center ml-lg-auto navbar-nav-hover">
                <li class="nav-item dropdown">
                <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Configurações</button>
                    <!-- <a href="#" class="nav-link text-dark" data-toggle="dropdown" role="button">
                       
                        <span class="nav-link-inner--text">Configurações</span>
                    </a> -->
                    <div class="dropdown-menu dropdown-menu-xl">
                        <div class="dropdown-menu-inner">
                            <a href="{{route('dashboard.index')}}" class="media d-flex align-items-center">
                                <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                    <i class="ni ni-tv-2"></i>
                                </div>
                                <div class="media-body ml-3">
                                    <h6 class="heading text-dark mb-md-1">Dashboard</h6>

                                </div>
                            </a>
                            <a href="{{route('config.createEdit')}}" class="media d-flex align-items-center">
                                <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                    <i class="ni ni-badge"></i>
                                </div>
                                <div class="media-body ml-3">
                                    <h6 class="heading text-dark mb-md-1">Perfil</h6>

                                </div>
                            </a>
                            <a href="{{route('products.index')}}" class="media d-flex align-items-center">
                                <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                    <i class="ni ni-bullet-list-67"></i>
                                </div>
                                <div class="media-body ml-3">
                                    <h6 class="heading text-dark mb-md-1">Pedidos</h6>

                                </div>
                            </a>
                            <a href="{{route('promotions.index')}}" class="media d-flex align-items-center">
                                <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                    <i class="ni ni-notification-70"></i>
                                </div>
                                <div class="media-body ml-3">
                                    <h6 class="heading text-dark mb-md-1">Promoções</h6>

                                </div>
                            </a>
                            <a href="{{route('menus.index')}}" class="media d-flex align-items-center">
                                <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                    <i class="ni ni-collection"></i>
                                </div>
                                <div class="media-body ml-3">
                                    <h6 class="heading text-dark mb-md-1">Menus</h6>

                                </div>
                            </a>

                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a  href="{{ Auth::user()->tenant->url_token }}"  target="_blank" class="media d-flex align-items-center">
                       
                    <div class="icon icon-shape bg-gradient-white rounded-circle text-dark">
                                    <i class="ni ni-world-2 text-warning"></i>
                                </div>
                    <!-- <i class="ni ni-world-2 text-primary"></i> -->
                        <!-- <span class="nav-link-text text-dark">{{ Auth::user()->tenant->url_token }} </span>
                        <span class="nav-link-text text-dark">http://www.cardappion.com.br/m/akfhemto </span> -->
                        <span class="nav-link-text text-warning">Landing Page </span>
                    </a>
                </li>
                
                <li class="nav-item">
                <a href="{{route('logout')}}" class="media d-flex align-items-center" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <!-- <i class="ni ni-button-power text-dark">  </i> -->
                       
                        <span class="nav-link-text text-dark">   Sair </span>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                    </a>
                </li>



            </ul>
        </div>
    </div>
</nav>