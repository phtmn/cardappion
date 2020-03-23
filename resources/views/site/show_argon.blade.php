@extends('site.layouts.master_design')

@section('content')

<body class="blog-posts">

  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent headroom">
    <div class="container">
      <a class="navbar-brand mr-lg-5" href="../../../index.html">
        <img src="{{asset('vendor/argon/assets/img/brand/logo4.png')}}">
      </a>
      <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="../../../index.html">
                <img src="{{ asset('img/blue.png') }}">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler " data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center ml-lg-auto">
          <li class="nav-item dropdown">
            <a href="javascript:;" class="nav-link" data-toggle="dropdown" role="button">
              <i class="ni ni-ui-04 d-lg-none"></i>
              <span class="nav-link-inner--text text-dark">Elements</span>
            </a>
           
          </li>
          <li class="nav-item dropdown">
            <a href="javascript:;" class="nav-link" data-toggle="dropdown" role="button">
              <i class="ni ni-app d-lg-none"></i>
              <span class="nav-link-inner--text text-dark">Design Blocks</span>
            </a>
           
          </li>
          <li class="nav-item dropdown">
            <a href="javascript:;" class="nav-link" data-toggle="dropdown" role="button">
              <i class="ni ni-single-copy-04 d-lg-none"></i>
              <span class="nav-link-inner--text text-dark">Examples</span>
            </a>
           
          </li>
          <li class="nav-item dropdown">
            <a href="javascript:;" class="nav-link" data-toggle="dropdown" role="button">
              <i class="ni ni-tablet-button d-lg-none"></i>
              <span class="nav-link-inner--text text-dark">App Pages</span>
            </a>
           
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
 
<section class="section">
        <div class="container mt-5">
          <div class="row">
            <div class="col-md-12 ml-auto mr-auto">
              <section class="blogs-3">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-10 col-md-8 mx-auto">
                      <h2 class="title mb-5">Sobre Nós</h2>
                      <div class="card card-blog card-plain blog-horizontal mb-5">
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="card-image shadow">
                              <a href="javascript:;">
                              @if (isset($config->image))
                  <img class="img rounded" src="{{ url("$config->image") }}" >
                  @endif
                                <!-- <img class="img rounded" src="{{ asset('img/team-2.jpg') }} " />: -->
                              </a>
                            </div>
                          </div>
                          <div class="col-lg-8">
                            <div class="card-body">
                              <h3 class="card-title">
                                <a href="javascript:;">{{ $tenant->name }}</a>
                              </h3>
                              <p class="card-description">
                                Finding temporary housing for your dog should be as easy as renting an Airbnb. That’s the idea behind Rover, which raised $65 million to expand its pet sitting and dog-walking businesses... <a href="javascript:;"> Read More </a>
                              </p>
                              <div class="author">
                                <img src="{{ asset('img/team-1.jpg') }} " alt="..." class="avatar img-raised">
                                <div class="text">
                                  <span class="name">Tom Hanks</span>
                                  <div class="meta">Drawn on 23 Jan</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
</section>

<section class="section  bg-white">
        <div class="container mt-5">
          <div class="row">
            <div class="col-md-12 ml-auto mr-auto">
              <section class="blogs-3">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-10 col-md-8 mx-auto">
                      <h2 class="title mb-5 text-danger">Promoções</h2>
                      <div class=" ">
        <div class="container">
          <div class="row">
          @forelse ($categories as $category)

          <div class="col-md-4">
    
    <div class="card card-profile" data-image="profile-image">
  <div class="card-header">
    <div class="card-image">
      <div class="dropdown">
        <button type="button" class="btn btn-link dropdown-toggle btn-icon-only" data-toggle="dropdown" aria-expanded="false">
          <i class="ni ni-settings-gear-65"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
          <a class="dropdown-item" href="javascript:;">Edit Profile</a>
          <a class="dropdown-item" href="javascript:;">Settings</a>
          <a class="dropdown-item" href="javascript:;">Log out</a>
        </div>
      </div>
      <a href="javascript:;">
        <img class="img rounded" src="{{ asset('img/team-5.jpg') }}">
      </a>
    </div>
  </div>
  <div class="card-body pt-0">
    <h4 class="display-4 mb-0">{{ $category->description }}</h4>
    <p class="lead">Team Lead</p>
    <div class="table-responsive">
      <ul class="list-unstyled ">
        <li class="py-1">
          <div class="d-flex align-items-center">
            <div>
              <div class="badge badge-circle badge-info mr-3">
                <i class="ni ni-atom"></i>
              </div>
            </div>
            <div>
              <h6 class="mb-1">Dedicated entrepreneur</h6>
            </div>
          </div>
        </li>
        
        
      </ul>
    </div>
  </div>
</div>


         



             
            </div>
            @empty
            <div class="col-lg-3 col-md-6">
              <a href="javascript:;" class="btn btn-gradient-danger btn-footer">
                <!-- <i class="fab fa-twitter"></i> -->
                <span class="alert-text"><strong>Nenhuma</strong> categoria cadastrada!</span>
                <!-- <p class="subtitle">@creativetim</p> -->
              </a>
            </div>
          
            
                @endforelse
          </div>
        </div>
      </div>
                    
                
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
</section>



<section class="section  bg-primary">
        <div class="container mt-5">
          <div class="row">
            <div class="col-md-12 ml-auto mr-auto">
              <section class="blogs-3">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-10 col-md-8 mx-auto">
                      <h2 class="title mb-5 text-white">Promoções</h2>
                      <div class="card card-blog card-plain blog-horizontal mb-5">
                        <div class="row">
                        <div class="col-md-12 mx-auto">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
           
          <img class="d-block w-100" src="https://images.unsplash.com/photo-1457904375453-3e1fc2fc76f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1800&q=80" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://images.unsplash.com/photo-1526404801122-40fc40fca08f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2553&q=80" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://images.unsplash.com/photo-1524095731963-b4e38d1b3329?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2550&q=80" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
                        </div>
                      </div>
                    
                
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
</section>
     
     
<section class="section  bg-white">

<div class="cd-section" id="accordion">
      <!--     *********     ACCORDION 1      *********      -->
      <div class="accordion-1">
        <div class="container mt-5">
          <div class="row">
          <div class="col-lg-10 col-md-8 mx-auto">
                      <h2 class="title mb-1 text-primary">Menu</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 ml-auto">
               
              <div class="accordion" id="accordionExample">
              @forelse ($categories as $category)                
                <div class="card">
               
                  <div class="card-header" id="headingTwo">                     
                    <h5 class="mb-0">
                      <button class="btn btn-link w-100 text-primary text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      
                      {{ $category->description }}
                    
                        <i class="ni ni-bold-down float-right pt-1"></i>
                      </button>                        
                    </h5>
                
                  </div>
                     
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  
                    <div class="card-body opacity-8">
                      Anim pariatur cliche reprehenderit, S.
                    </div>
                  </div>
                  @empty
            
            <!-- <i class="fab fa-twitter"></i> -->
            <span class="alert-text"><strong>Nenhuma</strong> categoria cadastrada!</span>      
        
            @endforelse
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>       
</section>

    
  

@stop

