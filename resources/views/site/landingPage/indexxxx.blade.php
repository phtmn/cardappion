<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="mtoken" content="{{ $token }}">

  <link rel="icon" href="{{ asset('vendor/argon/assets/img/brand/on.png') }}" type="image/png">
  <title> cardappion.com </title>

  <link rel="stylesheet" href="{{ asset('assets/css/stilo.css') }}" type="text/css">
  <link rel="icon" href="{{ asset('vendor/argon/assets/img/brand/on.png') }}" type="image/png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/css/argon.min.css?v=1.0.0') }}" type="text/css">


  <!-- Lato Font -->
  <link rel="stylesheet" href="https://pontodecoleta.com.br/layouts/site/css/css.css" type="text/css">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="https://pontodecoleta.com.br/layouts/site/css/gallery-materialize.css" type="text/css">

  <!-- Material Icons -->
  <link rel="stylesheet" href="https://pontodecoleta.com.br/layouts/site/css/icon.css" type="text/css">

  <link rel="canonical" href="https://themes.materializecss.com/pages/demo">

  <link rel="manifest" href="https://pontodecoleta.com.br/./manifest.json">

  <link rel="shortcut icon" href="https://pontodecoleta.com.br/layouts/site/img/logo-ponto-de-coleta-pin.png" />

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://pontodecoleta.com.br/layouts/site/css/materialize.min.css" type="text/css">


  <script src="{{ asset('vendor/materialize/js/jquery.js') }}  "></script>
  <script src="https://pontodecoleta.com.br/layouts/site/js/materialize.js "></script>
  <script src="https://pontodecoleta.com.br/layouts/site/js/gallery.js "></script>





</head>




<body class="#ffffff bg-default">
  <!-- Navbar and Header -->

  <nav class="nav-extended bg-white">
    <div class="nav-background">
      <div class="ea k" style="background-image: url('');"></div>
    </div>

    <div class="nav-wrapper db">

      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

      <!-- Dropdown Structure -->


      <div class="nav-header de">




        @if($config->image ?? '')
        <img src="{{ Storage::url("{$config->image }") }}" class="img-fluid rounded-circle shadow" style="width:225px; height:225px">

        @else
        <img src="{{asset('vendor/argon/assets/img/brand/no_foto.png')}}" class="img-fluid rounded-circle shadow" style="width:225px; height:225px">
        @endif



        <h5 class="mb-0">
          <a> {{ $tenant->name }} </a>
        </h5>

      </div>
    </div>



    <div class="categories-wrapper af lighten-1">

      <div class="categories-container bg-default ">

        <ul class="categories db">
          @forelse ($categories as $category)


          <li><a href="#polygon">{{ $category->description }} </a></li>
          @empty
          <p class="text-danger">Nenhuma categoria cadastrada!</p>
          @endforelse

        </ul>



      </div>
    </div>
    </div>


  </nav>

  <ul class="side-nav" id="nav-mobile" style="transform: translateX(-100%);">
    <li>
      @if($config->whatsapp ?? '')
      <a target="_blank" href="https://api.whatsapp.com/send?phone=55{{$config->whatsapp}}" class="avatar rounded-circle">
        <img alt="Image placeholder" src="{{asset('/vendor/argon/assets/img/brand/zap.png')}}">
      </a>
      @endif

      @if($config->telegram ?? '')
      <a target="_blank" href="https://t.me/{{$config->telegram}}" class="avatar rounded-circle">
        <img alt="Image placeholder" src="{{asset('/vendor/argon/assets/img/brand/telegram.png')}}">
      </a>
      @endif

      @if($config->instagram ?? '')
      <a target="_blank" href="https://www.instagram.com/{{$config->instagram}}" class="avatar rounded-circle">
        <img alt="Image placeholder" src="{{asset('/vendor/argon/assets/img/brand/instagram.png')}}">
      </a>
      @endif

      @if($config->fanpage ?? '')
      <a target="_blank" href="https://www.facebook.com/{{$config->fanpage}}" class="avatar rounded-circle">
        <img alt="Image placeholder" src="{{asset('/vendor/argon/assets/img/brand/face.png')}}">
      </a>
      @endif
    </li>
    <li>
      <h4 class="mb-0">
        <a> Informações adicionais </a>
      </h4>
      @if($config->details ?? '')
      <small>{{$config->details }}</small>
      @else
      <small class="text-danger">Informações adicionais não cadastrada!</small>
      @endif
    </li>
  </ul>
  <div id="portfolio" class="cx gray">


   

   
    @forelse ($categories as $category)
    @forelse ($category->products as $product)
                          @if (($product->active) != "0")
                          <div class="db">
      <div class="b e" style="position: relative; height: 1547.28px;">

        <div class="d hx hf gu gallery-item gallery-expand ce " style="position: absolute; ">

          <div class="placeholder">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
              @if(!$product->image1)
                
                @else
                <img class="responsive-img" src="{{ Storage::url($product->image1) }}">
                @endif
              </a>
              <div class="gallery-header">
                <span>{{ substr ($product->title, 0,22) }}</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>{{ substr ($product->title, 0,22) }}</h3>
                  @if (($product->price) != "0")
                                
                  <span class="gj">R$ {{ number_format($product->price,2,',','.')}}</span>
                                @endif
                  
                </div>
                <p class="fi">
                  <br>
                  <br>
                  {{$product->details}}</p>
                <p class="fi">
                  Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="t carousel">
                    <a class="carousel-item" href="#one!"><img src="https://s2.glbimg.com/OCyMXLBqPpimaQaElCiNCpgJBsI=/73x196:1122x786/fit-in/810x456/middle/smart/filters:strip_icc()/s2.glbimg.com/8CaK2cSmQwhMdA4nf_hk8ePliWM=/1200x/smart/filters:cover():strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2018/N/n/xP022KT0m8O8mje5vchg/foo-fighters-132a2796-fabio-tito-g1.jpg"></a>
                    <a class="carousel-item" href="#two!"><img src="https://cardappion.s3.us-east-2.amazonaws.com/images/products/MhEsLujnCfWdwjvI00cPoehspSqc68RjaO1LG6rE.jpeg"></a>
                    <a class="carousel-item" href="#three!"><img src="https://cardappion.s3.us-east-2.amazonaws.com/images/products/MhEsLujnCfWdwjvI00cPoehspSqc68RjaO1LG6rE.jpeg"></a>

                  </div>
                </div>
              </div>
             {{--  <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div> --}}
            </div>
          </div>

        </div>

      </div>
      </div>
      @endif
                          @empty
                          <p class="text-danger">Nenhum produto cadastrado na categoria!</p>
                          @endforelse
      @empty
      <p class="text-danger">Nenhuma categoria cadastrada!</p>
      @endforelse
    

      <section class="bg-white ">


        <div class="main-content  mt-6 ">
          <div class="header  pb-6">
            <div class="container-fluid">
              <div class="header-body">

              </div>
            </div>
          </div>




          <div class="container-fluid mt--5">
            <div class="row">

              <div class="col-lg-4 ">
                <div class="">
                  <div class="card-body">
                    <ul class="list-group list-group-flush list my--3">
                      <li class="list-group-item px-0">
                        <div class="row align-items-center">
                          <div class="col ">
                            <h4 class="mb-0">
                              <a> {{$config->address ?? ''}} </a>
                              <p> {{$config->neighborhood ?? ''}} </p>
                            </h4>
                            <small>{{$config->city ?? ''}} {{$config->us ?? ''}}</small>
                          </div>
                        </div>
                      </li>
                    </ul>

                    <p class="mt-3 mb-0 text-sm">
                      <a class="text-nowrap text-dark font-weight-600"> </a>
                    </p>

                    <div class="row">


                    </div>
                  </div>
                </div>
              </div>


              <div class="col-lg-4 ">
                <div class="">
                  <div class="card-body">
                    <ul class="list-group list-group-flush list my--3">
                      <li class="list-group-item px-0">
                        <div class="row align-items-center">
                          <div class="col ml--2">
                            <h4 class="mb-0">
                              <a> Informações adicionais </a>
                            </h4>
                            @if($config->details ?? '')
                            <small>{{$config->details }}</small>
                            @else
                            <small class="text-danger">Informações adicionais não cadastrada!</small>
                            @endif

                          </div>
                        </div>
                      </li>
                    </ul>

                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
    </div>

    </section>


    <section class="section">
      <div class="accordion-1">
        <div class="container">
          <div class="row">
            <div class="col-md-12 ml-auto">
              <div class="accordion my-0" id="accordionExample">

                @forelse ($categories as $category)
                <div class=" mb-1">
                  <div class="card-header p-0" id="heading{{ $loop->index }}" data-toggle="collapse" data-target="#collapse{{ $loop->index }}" aria-expanded="true" aria-controls="collapse{{ $loop->index }}">
                    <h5 class="mb-0 m-3">

                      <i class="ni ni-ungroup text-default"></i> {{ $category->description }}

                    </h5>
                  </div>

                  <div id="collapse{{ $loop->index }}" class="collapse" aria-labelledby="heading{{ $loop->index }}" data-parent="#accordionExample">
                    <div class="card-body opacity-8">
                      <div class="row">


                        <div class="card-body p-1">
                          <ul class="list-group list-group-flush list my--3 ">
                            @forelse ($category->products as $product)
                            @if (($product->active) != "0")



                            <li class="list-group-item px-0">

                              <div class="row align-items-center">

                                <div class="col-auto">
                                  <div class="avatar-group">
                                    @if(!$product->image1)
                                    <a class="avatar " href="{{ route('site.menu.product', ['token' => $token,'id' => $product->id]) }}">
                                      <img src="{{asset('/vendor/argon/assets/img/brand/no_foto.png')}}" width="45" height="45">
                                    </a>
                                    @else
                                    <a class="avatar " href="{{ route('site.menu.product', ['token' => $token,'id' => $product->id]) }}">
                                      <img src="{{ Storage::url($product->image1) }}" width="45" height="45">
                                    </a>
                                    @endif
                                  </div>

                                </div>
                                <div class="col ml--2">
                                  <h4 class="mb-0">
                                    <a href="{{ route('site.menu.product', ['token' => $token,'id' => $product->id]) }}">{{ substr ($product->title, 0,22) }} ... </a>
                                  </h4>

                                </div>
                                <div class="col-auto">

                                  @if (($product->price) != "0")

                                  <label><b>R$ {{ number_format($product->price,2,',','.')}}</b></label>
                                  @endif

                                </div>
                              </div>

                            </li>

                            @endif
                            @empty
                            <p class="text-danger">Nenhum produto cadastrado na categoria!</p>
                            @endforelse
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @empty
                <p class="text-danger">Nenhuma categoria cadastrada!</p>
                @endforelse

              </div>
            </div>
          </div>
        </div>
      </div>

    </section>


    {{-- @include('site.layouts._footer') --}}

</body>

</html>