<div class="main-content">  
  <section class="py-0 bg-gradient-danger" id="sobre">
    <div class="main-content">
      <div class="header  py-3 py-lg-1 pt-lg-9">        
        </div>
      </div>
  </section>

  <section class="py-4 mt-8 section bg-gradient-danger" >
    <div class="container">
      <div class="card card-profile shadow mt-500">
        <div class="px-8">
          <div class="row justify-content-center">
            <div class="col-lg-3 order-lg-2">
              <div class="card-profile-image mt-4">
                <a href="#">
                  <img src="{{asset('vendor/argon/assets/img/brand/logo3.png')}}" class="rounded-circle">
                </a>
              </div>
            </div>
            <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
              <div class="card-profile-actions py-4 mt-lg-0">
                <!-- <i class="fa fa-phone"></i> -->
                <!-- <a class="nav-link nav-link-icon" href="" target="_blank" data-toggle="tooltip" title=" Whatsapp">
							<i class="fa fa-whatsapp"></i>
							<span class="nav-link-inner--text d-lg-none">Whatsapp</span>
						</a> -->
                <!-- <i class="fab fa-instagram"></i>
              <i class="fab fa-facebook"></i>
              <i class="fa fa-globe"></i> -->
                <!-- <a href="#" class="btn btn-sm btn-info mr-4">Connect</a> -->
                <!-- <a href="#" class="btn btn-sm btn-default float-right">Message</a> -->
              </div>
            </div>
            <div class="col-lg-4 order-lg-1">
              <div class="card-profile-stats d-flex justify-content-center">
                <div>
                  <a href="#sobre">
                    <div class="icon icon-shape bg-danger rounded-circle text-white">
                      <i class="ni ni-building"></i>
                    </div>
                    <h5 class="text-dark text-center">Sobre </h5>
                  </a>
                </div>
                <div>
                  <a href="#menu">
                    <div class="icon icon-shape bg-gradient-danger rounded-circle text-white">
                      <i class="ni ni-collection"></i>
                    </div>
                    <h5 class="text-dark text-center">Menu</h5>
                  </a>
                </div>
                <div>
                  <a href="#promocoes">
                    <div class="icon icon-shape bg-warning rounded-circle text-white">
                      <i class="ni ni-notification-70"></i>
                    </div>
                    <h5 class="text-dark text-center">Ofertas</h5>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center mt-5">
            <h3>{{ $tenant->name }}<span class="font-weight-light">, {{ $config->city ?? '' }} {{ $config->us ?? '' }}</span></h3>
            <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>{{ $config->address ?? '' }}, {{ $config->neighborhood ?? '' }}</div>
            <!-- <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer</div>
            <div><i class="ni education_hat mr-2"></i>University of Computer Science</div> -->
            <div class="d-flex justify-content-center mb-2 ">

              @if($config->telephone)
              <a href="{{ $config->telephone ?? 'https://coopviva.com.br' }}" class="nav-link nav-link-icon" target="_blank">
                <i class="ni ni-world-2  text-Primary"></i>
              </a>
              @endif

              @if($config->whatsapp)
              <a href="{{ $config->whatsapp ?? 'https://coopviva.com.br' }}" class="nav-link nav-link-icon" target="_blank">
                <i class="ni ni-world-2  text-Primary"></i>
              </a>
              @endif

              @if($config->instagram)
              <a href="{{ $config->instagram ?? 'https://coopviva.com.br' }}" class="nav-link nav-link-icon" target="_blank">
                <i class="ni ni-world-2  text-Primary"></i>
              </a>
              @endif

              @if($config->fanpage)
              <a href="{{ $config->fanpage ?? '#' }}" class="nav-link nav-link-icon" target="_blank">
                <i class="fa fa-facebook  text-Primary"></i>
              </a>
              @endif

              @if($config->site)
              <a href="{{ $config->site ?? '#' }}" class="nav-link nav-link-icon" target="_blank">
                <i class="fa fa-instagram  text-Primary"></i>
              </a>
              @endif


            </div>
          </div>
          <div class="mt-5 py-5 border-top text-center">
            <div class="row justify-content-center">
              <div class="col-lg-9">
                <!-- <p>Colocar aqui Informaões AdicionaisAn artist of considerable range, Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. An artist of considerable range.</p> -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>






















  <section class="py-6 bg-gradient-danger" id="menu">
    <div class="main-content">

      <div class="header  py-7 py-lg-8 pt-lg-9">
        <div class="container">
          <div class="header-body text-center mb-4">
            <div class="alert alert-white alert-dismissible fade show" role="alert">
              <div class="icon icon-shape bg-gradient-danger rounded-circle text-white">
                <i class="ni ni-collection"></i>
              </div>
              <h5 class="text-dark text-center">Menu</h5>
            </div>
            <!-- <div class="row justify-content-center">              
              <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                <h1 class="text-white"> <i class="ni ni-collection"></i> Menu</h1>
              </div>
            </div> -->
          </div>
        </div>
      </div>

      <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            @foreach ($categories as $category)
            <p>
              <div class="alert alert-white alert-dismissible fade show" role="alert" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <span class="alert-inner--icon"><i class="ni ni-ungroup "></i></span>
                <span class="alert-inner--text"><strong>{{ $category->description }} </strong> </span>
              </div>
            </p>
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                <ul class="list-group list-group-flush list my--3">
                  <li class="list-group-item px-0">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <img alt="Image placeholder" style="width: 50px;" class="img-fluid rounded shadow" src="{{asset('vendor/argon/assets/img/brand/logo3.png')}}">
                      </div>
                      <div class="col ml--2">
                        <h4 class="mb-0">
                        Puxar o Nome do produto bla bla bla bla
                        </h4>
                        <button type="button" class="btn btn-sm btn-warning mb-3" data-toggle="modal" data-target="#modal-default">Valor ?</button>

                      </div>
                      <div class="col-auto">
                      <!-- <button type="button" class="btn btn-block btn-primary mb-3" data-toggle="modal" data-target="#modal-default">Default</button> -->
      
                      </div>
                    </div>
                    <p></p>
                  </li>
                  
                </ul>
              </div>
            </div>
            @endforeach


          </div>

        </div>
      </div>
      <!-- Modal  -->
      <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title" id="modal-title-default"><i class="ni ni-ungroup "></i> Puxar o nome da categoria que foi inserida </h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">              
              <center><img alt="Image placeholder" style="width: 250px;" class="img-fluid rounded shadow" src="{{asset('vendor/argon/assets/img/brand/logo3.png')}} "></center>
              <p>Puxar o Título </p>
              <p>Puxar as Informações Adicionais </p>
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              <button type="button" class="btn btn-warning">Puxar o valor do produto R$ </button>
            </div>
          </div>
        </div>
  </section>






  <section class="py-6 bg-gradient-white " id="promocoes">
    <div class="main-content">
      <div class="header py-7 py-lg-8 pt-lg-9">
        <div class="container">
          <div class="header-body text-center mb-7">
            <div class="row justify-content-center">
              <div class="col-xl-5 col-lg-6 col-md-8 px-5 ">
                <div class="icon icon-shape bg-warning rounded-circle text-white">
                  <i class="ni ni-notification-70"></i>
                </div>
                <h2 class="text-dark"> Promoções</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid mt--8 pb-5">
        <div class="row  d-flex justify-content-center">
          <div class="col-lg-12">
            @forelse($promotions as $promotion)
            <div class="col-xs-12 ">
              <div class="col-xs-12 hovereffect">
                <div>
                  <a href="{{ url($promotion->image) }}" data-fancybox="gallery" data-caption="{{$promotion->title}} - {{$promotion->promotion_value}} - {{$promotion->details}}" class="">
                    <img src="{{ url($promotion->image) }}" class="img-fluid " alt="" style="width:355px; height:255px;" />
                  </a>
                </div>
              </div>
            </div>
            @empty
            <p class="font-weight-900 text-default text-center">#não há promoções para exibir!</p>
            @endforelse
          </div>
        </div>
      </div>
  </section>





  <section class="py-6 bg-gradient-dark " id="">
  <div class="our-causes">
        <div class="container">
            <div class="row">
                <div class="coL-12">
                    <div class="section-heading">
                        <h2 class="entry-title">Our Causes</h2>
                    </div><!-- .section-heading -->
                </div><!-- .col -->
            </div><!-- .row -->

            <div class="row">
                <div class="col-12">
                    <div class="swiper-container causes-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="{{ url($promotion->image) }}" alt="">

                                        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                            <a href="#" class="btn gradient-bg mr-2">Donate Now</a>
                                        </div><!-- .figure-overlay -->
                                    </figure>

                                    <div class="cause-content-wrap">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0"><a href="#">Bring water to the childrens</a></h3>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                        </div><!-- .entry-content -->

                                        <div class="fund-raised w-100">
                                            <div class="fund-raised-bar-1 barfiller">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div><!-- .tipWrap -->

                                                <span class="fill" data-percentage="83"></span>
                                            </div><!-- .fund-raised-bar -->

                                            <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                                <div class="fund-raised-total mt-4">
                                                    Raised: $56 880
                                                </div><!-- .fund-raised-total -->

                                                <div class="fund-raised-goal mt-4">
                                                    Goal: $70 000
                                                </div><!-- .fund-raised-goal -->
                                            </div><!-- .fund-raised-details -->
                                        </div><!-- .fund-raised -->
                                    </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="{{ url($promotion->image) }}" alt="">

                                        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                            <a href="#" class="btn gradient-bg mr-2">Donate Now</a>
                                        </div><!-- .figure-overlay -->
                                    </figure>

                                    <div class="cause-content-wrap">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0"><a href="#">Education for all</a></h3>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                        </div><!-- .entry-content -->

                                        <div class="fund-raised w-100">
                                            <div class="fund-raised-bar-2 barfiller">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div><!-- .tipWrap -->

                                                <span class="fill" data-percentage="70"></span>
                                            </div><!-- .fund-raised-bar -->

                                            <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                                <div class="fund-raised-total mt-4">
                                                    Raised: $56 880
                                                </div><!-- .fund-raised-total -->

                                                <div class="fund-raised-goal mt-4">
                                                    Goal: $70 000
                                                </div><!-- .fund-raised-goal -->
                                            </div><!-- .fund-raised-details -->
                                        </div><!-- .fund-raised -->
                                    </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->

                        </div><!-- .swiper-wrapper -->

                    </div><!-- .swiper-container -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
                    </div>

                    <div class="swiper-button-prev flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .our-causes -->

    </section>


  <!-- <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
          <div class="col-lg-10 ">
            @foreach($promotions->chunk(3) as $promotion)
              <div class="row row-grid">
                @forelse ($promotions as $promotion)
                    <div class="col-lg-3">
                      <div class="pricing card-group flex-column flex-md-row mb-3">
                        <div class="card">                      
                            <img class="card-img-top" src="{{ url($promotion->image) }}" alt="Image placeholder">                      
                            <div class="card-body">
                              <h5 class="h2 card-title mb-0">{{ $promotion->title }}</h5>
                              <small class="text-muted"><span class="badge badge-dot mr-4">
                                  <i class="bg-success"></i>
                                  <span class="status">disponível</span>
                              </small>
                              <p class="card-text mt-4">{{ $promotion->details }}</p>
                              <b class="px-0 text-warning">R$ {{ number_format($promotion->promotion_value,2,',','.')}}</b>
                            </div>
                            @empty
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">                      
                              <span class="alert-text"><strong>Nenhuma</strong> promoção cadastrada!</span>
                            </div>
                  @endforelse                     
              </div>
            @endforeach
          </div>
        </div>
      </div>
      </div>
   -->