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


<body class="">
@include('site.layouts._nav')

<div class="main-content bg-white mt-6 ">
  <div class="header bg-white pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-2 col-7">
            <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
              <i class="ni ni-collection"></i>

            </div>
            
          </div>
          <div class="col-lg-10 col-5 text-right">
            <h4 class="display-5 text-dark d-inline-block mb-0"> Categorias do Menu</h4>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt--6">
    <div class="row">

      <div class="col-xl-12 col-md-6">

      </div>
    </div>
  </div>


  <section class="section">
    <div class="accordion-1">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ml-auto">
            <div class="accordion my-0" id="accordionExample">

              @forelse ($categories as $category)
              <div class="card mb-1">
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


</div>
</div>

</div>
<section class="py-8 bg-white ">

</section>


@include('site.m._footer')

</body>

</html>