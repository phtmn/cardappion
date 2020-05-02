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
              <i class="ni ni-building"></i>
            </div>

          </div>
          <div class="col-lg-10 col-5 text-right">
            <h4 class="display-5 text-dark d-inline-block mb-0"> {{ $tenant->name }}</h4>
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
                <a>
                @if($config->image ?? '')
                  <img src="{{ Storage::url("{$config->image }") }}" class="avatar img-fluid floating" style="width:225px; height:225px">
                  
                  @else
                  <img src="{{asset('vendor/argon/assets/img/brand/no_foto.png')}}" class="avatar img-fluid floating" style="width:225px; height:225px">
                  @endif

                </a> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 ">
        <div class="card bg-white border-0">
          <div class="card-body">
            <ul class="list-group list-group-flush list my--3">
              <li class="list-group-item px-0">
                <div class="row align-items-center">
                  <div class="col ">
                    <h4 class="mb-0">
                      <a> {{$config->address ?? ''}}  </a>
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

              <div class="col-auto  mt-3">
                <!-- Avatar -->
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

                @if($config->site ?? '')
                <a target="_blank" href="http://{{$config->site}}" class="avatar rounded-circle">
                  <img alt="Image placeholder" src="{{asset('/vendor/argon/assets/img/brand/sites.png')}}">
                </a> 
                @endif   
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-lg-4 ">
        <div class="card bg-white border-0">
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



<section class="py-8 bg-white ">

</section>



@include('site.m._footer')

</body>

</html>

