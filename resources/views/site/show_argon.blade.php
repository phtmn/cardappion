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
      <!-- <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button> -->
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <!-- <a href="../../../index.html">
                <img src="{{ asset('img/blue2.png') }}">
              </a> -->
            </div>
            <!-- <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler " data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div> -->
          </div>
        </div>
        <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item">
                <a href="{{ route('cart.checkout', ['token' => $token]) }}" class="btn btn-warning ml-3">Sacola <i class="ni ni-cart"></i></a href="{{ route('cart.checkout', ['token' => $token]) }}">
            </li>
        </ul>
        <!-- <ul class="navbar-nav navbar-nav-hover align-items-lg-center ml-lg-auto">

        </ul> -->
      </div>
    </div>
  </nav>


  
  <!-- End Navbar -->
  @include('site.show_s1')

  {{-- @include('site.show_s2')  --}}

  {{-- @include('site.show_s3')	 --}}

  {{-- @include('site.show_s4')	 --}}





  <section class="section">



    <div class="accordion-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ml-auto">
                    <div class="accordion my-3" id="accordionExample">

                        @foreach ($categories as $category)
                        <div class="card">
                            <div class="card-header" id="heading{{ $loop->index }}">
                                <h5 class="mb-0">
                                    <button class="btn btn-link w-100 text-primary text-left" type="button" data-toggle="collapse" data-target="#collapse{{ $loop->index }}" aria-expanded="true" aria-controls="collapse{{ $loop->index }}">
                                        {{ $category->description }}
                                        <i class="ni ni-bold-down float-right"></i>

                                    </button>
                                </h5>
                            </div>

                            <div id="collapse{{ $loop->index }}" class="collapse" aria-labelledby="heading{{ $loop->index }}" data-parent="#accordionExample">
                                <div class="card-body opacity-8">
                                    <div class="row">
                                        @foreach ($category->products as $product)
                                            <div class="card text-center col-md-4" style="width: 20rem;">
                                                <img class="card-img-top" src="{{ url("{$product->image}") }}" alt="{{ $product->title }}">
                                                <div class="card-body">
                                                    <h4 class="card-title">{{ $product->title }}</h4>
                                                    <p class="card-text">{{ $product->details }}</p>
                                                    <a href="{{ route('site.menu.product', ['token' => $token,'id' => $product->id]) }}" class="btn btn-sm btn-primary">Ver Produto</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
















    {{-- <div class="cd-section" id="accordion">
      <div class="accordion-1">
        <div class="container mt-5">
          <!-- <div class="row">
            <div class="col-lg-10 col-md-8 mx-auto">
              <h2 class="title mb-1 text-primary">Menu</h2>
            </div>
          </div> -->
          <div class="row">
            <div class="col-md-12 ml-auto">
              <div class="accordion" id="accordionExample">
                @forelse ($categories as $category)
                <div class="card">
                  <div class="card-header" id="headingTwo">
                  <h4 class="h3 mb-0">Menu</h4>
                    <h5 class="mb-0">
                      <button class="btn btn-link w-100 text-primary text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" href="#" data-route="{{ route('admin.menus.getproducts', [ 'id' => $category->id ]) }}" data-id="{{ $category->id }}">
                        {{ $category->description }}
                        <i class="ni ni-bold-down float-right pt-1"></i>
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body ">
                      <div class="row">
                        <div class="col-xl-12">
                          <div class="card">
                            <div class="card-body">
                              <ul class="list-group list-group-flush list my--3">
                                @forelse ($products as $d)
                                <li class="list-group-item px-0">
                                  <div class="row align-items-center">
                                    <div class="col-auto">
                                      <a href="#">
                                        <img alt="Image placeholder" src="{{ url("{$d->image}") }}" class="img-fluid rounded shadow-lg" style="width: 80px;">
                                      </a>
                                    </div>
                                    <div class="col ml--2">
                                      <h4 class="mb-0">
                                        <a href="#!"> {{ $d->title }}</a>
                                      </h4>
                                      <!-- <span class="text-success">●</span> -->
                                      <small>R$
                                        {{ number_format($d->promotion_value,2,',','.')}}</small>
                                    </div>
                                    <div class="col-auto">
                                      <button type="button" class="btn btn-sm btn-primary">R$ {{ number_format($d->promotion_value,2,',','.')}}</button>
                                    </div>
                                  </div>
                                </li>

                                @empty

                                <!-- <i class="fab fa-twitter"></i> -->
                                <span class="alert-text"><strong>Nenhuma</strong> categoria cadastrada!</span>

                                @endforelse
                              </ul>
                            </div>
                          </div>
                        </div>
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
    </div> --}}
  </section>









    @stop
