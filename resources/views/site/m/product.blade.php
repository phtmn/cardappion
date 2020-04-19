<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="mtoken" content="{{ $token }}">

  <link rel="icon" href="{{ asset('vendor/argon/assets/img/brand/logo3.png') }}" type="image/png">
  <title>
    {{ config('app.name') }}
  </title>

  <!-- <meta name="keywords" content="argon design system pro, design system, login, form, table, tables, calendar, card, cards, navbar, modal, icons, icons, map, chat, carousel, menu, datepicker, gallery, slider, date, sidebar, social, dropdown, search, tab, nav, footer, date picker, forms, tabs, time, button, select, input, timeline, cart, car, fullcalendar, about us, invoice, account, chat, log in, blog, profile, portfolio, landing page, ecommerce, shop, landing, register, app, contact, one page, sign up, signup, store, bootstrap 4, bootstrap4">
  <meta name="description" content="Start your development with a Premium Argon Design System for Bootstrap 4. It combines colors that are easy on the eye, spacious cards, beautiful typography, and graphics. It is a beautiful cross-platform UI kit featuring over 1100 components, 43 sections and 17 example pages."> -->

  <link rel="stylesheet" href="{{ asset('assets/css/stilo.css') }}" type="text/css">
  <link rel="icon" href="{{ asset('vendor/argon/assets/img/brand/logo3.png') }}" type="image/png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/css/argon.min.css?v=1.0.0') }}" type="text/css">


  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/lavalamp/js/jquery.lavalamp.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>
  <script src="{{ asset('assets/js/argon.min.js?v=1.0.0') }}"></script>
  <script src="{{ asset('assets/js/demo.min.js') }}"></script>




  <!-- Place this tag in your head or just before your close body tag. -->
  <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
  <script src="{{ asset('js/argon-design-system.min.js?v=1.0.2') }}" type="text/javascript"></script> <!-- botão -->
  <!-- <script src="{{ asset('js/jquery.sharrre.js') }}"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script> -->




  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>

</head>


<body class="bg-gradient-default">



  @include('site.layouts._nav')



  <div class="main-content bg-white">
    <div class="header bg-white pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-2 col-7">
              <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                <i class="ni ni-bullet-list-67"></i>
              </div>

            </div>
            <div class="col-lg-10 col-5 text-right">
              <h4 class="display-5 text-dark d-inline-block mb-0"> {{ $product->title }}</h4>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-lg-4">
          <div class="card-wrapper">
            <div class="card ">
              <div class="card-body">
                <div class="text-center">
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">

                      @if(!$product->image1)
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('vendor/argon/assets/img/brand/no_foto.png')}}" style="width:180px; height:180px" alt="Terceiro Slide">
                      </div>
                      @else
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ Storage::url("{$product->image1}") }}" style="width:180px; height:180px" alt="Terceiro Slide">
                      </div>
                      @endif

                      @if(!$product->image2)
                      <div class="carousel-item ">
                        <img class="d-block w-100" src="{{asset('vendor/argon/assets/img/brand/no_foto.png')}}" style="width:180px; height:180px" alt="Terceiro Slide">
                      </div>
                      @else
                      <div class="carousel-item ">
                        <img class="d-block w-100" src="{{ Storage::url("{$product->image2}") }}" style="width:180px; height:180px" alt="Terceiro Slide">
                      </div>
                      @endif

                      @if(!$product->image3)
                      <div class="carousel-item ">
                        <img class="d-block w-100" src="{{asset('vendor/argon/assets/img/brand/no_foto.png')}}" style="width:180px; height:180px" alt="Terceiro Slide">
                      </div>
                      @else
                      <div class="carousel-item ">
                        <img class="d-block w-100" src="{{ Storage::url("{$product->image3}") }}" style="width:180px; height:180px" alt="Terceiro Slide">
                      </div>
                      @endif
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Próximo</span>
                    </a>
                  </div>
                  <div class="text-center">
                    <!-- <h5 class="h3">
                  Jessica Jones<span class="font-weight-light">, 27</span>
                </h5> -->
                    <div class="h5 font-weight-300 mt-2">
                      <small><b>Quantidade</b></small>
                      <div class="input-group">
                        <div class="input-group-btn">
                          <button id="down" class="btn btn-outline-warning btn-round" onclick="down('0')"><i class="ni ni-fat-delete"></i></button>
                        </div>
                        <input type="text" id="myNumber" class="form-control input-number" value="1">
                        <div class="input-group-btn">
                          <button id="up" class="btn btn-outline-warning btn-round" onclick="up('100')"><i class="ni ni-fat-add"></i></button>
                        </div>
                      </div>

                    </div>
                    <div class="h5 mt-4 ">

                      <button class="btn btn-sm btn-warning ml-3 addCart" data-id="{{ $product->id }}">Adicionar ao Pedido &nbsp;<i class="ni ni-cart"></i></button>

                    </div>
                    <div>
                      @if (($product->price) != "0")

                      <label><b>R$ {{ number_format($product->price,2,',','.')}}</b></label>
                      @endif
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 ">
          
            <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <h5 class="mb-0">Mais Informações</h5>
                </div>
                <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                  @if($product->details)                  
                  <label class="col-form-label form-control-label text-right p-3">Informações adicionais </label>
                    <p style="text-indent: 25px;" align="justify">{{$product->details}}</p>                                      
                  @else               
                  @endif

                  @if($product->nutritional_value)
                  <label class="col-form-label form-control-label text-right p-3">Valor nutricional </label>
                    <p style="text-indent: 25px;" align="justify">{{$product->nutritional_value}}</p>                                      
                  @else               
                  @endif

                  @if($product->origin_inputs)
                  <label class="col-form-label form-control-label text-right p-3">Origem do insumos </label>
                    <p style="text-indent: 25px;" align="justify">{{$product->origin_inputs}}</p>                                      
                  @else               
                  @endif

                  @if($product->serving_suggestion)                  
                  <label class="col-form-label form-control-label text-right p-3">Sugestão de porção - Rendimento </label>
                    <p style="text-indent: 25px;" align="justify">{{$product->serving_suggestion}}</p>                                      
                  @else               
                  @endif

                  @if($product->linked_revenue)
                  <label class="col-form-label form-control-label text-right p-3">Receita vinculada </label>
                    <p style="text-indent: 25px;" align="justify">{{$product->linked_revenue}}</p>                                                        
                  @else               
                  @endif

                  @if($product->service_suggestion)                  
                  <label class="col-form-label form-control-label text-right p-3">Sugestão de serviço </label>
                    <p style="text-indent: 25px;" align="justify">{{$product->service_suggestion}}</p>                                      
                  @else               
                  @endif

                  @if($product->harmonization)                  
                  <label class="col-form-label form-control-label text-right p-3">Harmonização </label>
                    <p style="text-indent: 25px;" align="justify">{{$product->harmonization}}</p>                                      
                  @else               
                  @endif

                  @if($product->curiosities)                  
                  <label class="col-form-label form-control-label text-right p-3">Curiosidades </label>
                    <p style="text-indent: 25px;" align="justify">{{$product->curiosities}}</p>                                                      
                  @else               
                  @endif                  
                  
                </div>
              </div>             
            </div>
         
        </div>


      </div>


    </div>
  </div>
  </div>



  <section class="py-6 bg-gradient-default ">

  </section>

 

  @include('site.m._footer')


</body>

</html>