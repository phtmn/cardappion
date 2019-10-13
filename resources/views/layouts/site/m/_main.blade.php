<div class="main-content" >






  <section class="py-4 mt-8 section bg-gradient-danger" id="sobre">
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
                                            <a href="{{ $config->telephone ?? 'https://coopviva.com.br' }}" class="nav-link nav-link-icon" target="_blank"  >
                                            <i class="ni ni-world-2  text-Primary"></i>
                                            </a>
                                        @endif

                                        @if($config->whatsapp)
                                            <a href="{{ $config->whatsapp ?? 'https://coopviva.com.br' }}" class="nav-link nav-link-icon" target="_blank"  >
                                            <i class="ni ni-world-2  text-Primary"></i>
                                            </a>
                                        @endif

                                        @if($config->instagram)
                                            <a href="{{ $config->instagram ?? 'https://coopviva.com.br' }}" class="nav-link nav-link-icon" target="_blank"  >
                                            <i class="ni ni-world-2  text-Primary"></i>
                                            </a>
                                        @endif

                                        @if($config->fanpage)
                                            <a href="{{ $config->fanpage ?? '#' }}" class="nav-link nav-link-icon"  target="_blank" >
                                            <i class="fa fa-facebook  text-Primary"></i>
                                            </a>
										                    @endif

                                        @if($config->site)
                                            <a href="{{ $config->site ?? '#' }}" class="nav-link nav-link-icon"  target="_blank" >
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
          <div class="header-body text-center mb-2">
            <div class="row justify-content-center">
              <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                <h1 class="text-white"> <i class="ni ni-collection"></i> Menu</h1>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            @foreach ($categories as $category)
            <p>
              <div class="alert alert-white alert-dismissible fade show" role="alert" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <span class="alert-inner--icon"><i class="ni ni-ungroup "></i></span>
                <span class="alert-inner--text"><strong>{{ $category->description }} </strong> </span>

              </div>
              <!-- <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                {{ $category->description }}
              </a> -->

              <!-- <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Button with data-target
  </button> -->
            </p>
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                <ul class="list-group list-group-flush list my--3">
                  <li class="list-group-item px-0">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->

                        <img alt="Image placeholder" style="width: 50px;" class="img-fluid rounded shadow" src="">

                      </div>
                      <div class="col ml--2">
                        <h4 class="mb-0">
                          blablablabla
                        </h4>
                        <button type="button" class="btn btn-sm btn-danger">R$ 10</button>

                      </div>
                      <div class="col-auto">
                        <!-- <button type="button" class="btn btn-sm btn-primary">R$ 10</button> -->
                      </div>
                    </div>
                    <p></p>
                  </li>
                  <li class="list-group-item px-0">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->

                        <img alt="Image placeholder" style="width: 50px;" class="img-fluid rounded shadow" src="">

                      </div>
                      <div class="col ml--2">
                        <h4 class="mb-0">
                          blablablabla
                        </h4>
                        <button type="button" class="btn btn-sm btn-danger">R$ 10</button>

                      </div>
                      <div class="col-auto">
                        <!-- <button type="button" class="btn btn-sm btn-primary">R$ 10</button> -->
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
      <div class="modal fade" id="modal-menu" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title" id="modal-title-default">Promoções</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <p> </p>
              <p><img alt="Image placeholder" style="width: 50px;" class="img-fluid rounded shadow" src=" "></p>
              <p> </p>
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              <button type="button" class="btn btn-primary">R$ </button>
            </div>
          </div>
        </div>
  </section>




  <!-- 
  <section class="py-0 bg-defaut" id="promocowwes">
    <div class="main-content">
      <div class="header  py-5 py-lg-8 pt-lg-9">
        <div class="container">
          <div class="header-body text-center mb-0">
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
      </div>
     
      
      
          
  </section> -->

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