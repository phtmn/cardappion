<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="description" content="{{ $config->details }}">
  <meta name="keywords" content="{{ $tenant->name }} - cardappion.com ">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

  <title>cardappion.com</title>

  <link rel="stylesheet" href="{{ asset('assets/css/stilo.css') }}" type="text/css">
  <link rel="icon" href="{{ asset('vendor/argon/assets/img/brand/on.png') }}" type="image/png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/css/argon.min.css?v=1.0.0') }}" type="text/css">


  <!-- materialize -->
  <link rel="stylesheet" href="{{ asset('assets/css/gallery-materialize.css') }}" type="text/css">

 
  <!-- Compiled and minified CSS -->
  <!-- <link rel="stylesheet" href="https://pontodecoleta.com.br/layouts/site/css/materialize.min.css" type="text/css"> -->

</head>

<body class="#525f7f bg-default">
  <!-- Navbar and Header -->

  <nav class="nav-extended  white">
  
         
         

    @include('site.landingPage.menus')


  </nav>

  


  <ul class="side-nav" id="nav-mobile" style="transform: translateX(-100%);">
    <li class="pt-3 ml-6">
      
    @if($config->image ?? '')

<img src="{{ Storage::url("{$config->image }") }}" class="img-fluid rounded-circle shadow" style="width:150px; height:150px">

@else

<img src="{{asset('vendor/argon/assets/img/brand/no_foto.png')}}" class="img-fluid rounded-circle shadow " style="width:150px; height:150px">

@endif



    </li>
    <hr class="mb-2">
    <li><b class="p-2">{{ $tenant->name }}</b></li>
    <li><p class="pl-3">{{$config->address ?? ''}} </p></li>
    <li><p class="pl-3">{{$config->neighborhood ?? ''}}, {{$config->city ?? ''}} {{$config->us ?? ''}}</p></li>

    <hr class="mb-2">
    <li><b class="p-2">Contato</b></a></li>
    @if($config->whatsapp ?? '')
        <li>
          <a target="_blank" href="https://api.whatsapp.com/send?phone=55{{$config->whatsapp}} " class="text-dark">
            WhatsApp
          </a>
          </li>
          @endif
       
        @if($config->telegram ?? '')
        <li>
          <a target="_blank" href="https://t.me/{{$config->telegram}}" class="text-dark">
            Telegram
          </a>
          </li>
          @endif
      
       @if($config->instagram ?? '')
        <li>
          <a target="_blank" href="https://www.instagram.com/{{$config->instagram}}" class="text-dark">
            Instagram
          </a>
          </li>
          @endif
        
        @if($config->fanpage ?? '')
        <li>
          <a target="_blank" href="https://www.facebook.com/{{$config->fanpage}}" class="text-dark">
            Facebook
          </a>
          </li>
          @endif
        
        @if($config->site ?? '')
        <li>
          <a target="_blank" href="http://{{$config->site}}" class="text-dark">
            Site
          </a>
          </li>
          @endif

   

  </ul>


  @include('site.landingPage.products')


  <!-- materialize -->
  <script src="{{ asset('assets/js/jquery.js') }} "></script>
  <script src="{{ asset('assets/js/materialize.js') }}"></script>
  <script src="{{ asset('assets/js/gallery.js') }} "></script>


  <!-- fab botton -->
  <script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
  });



  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.materialboxed').materialbox();
  });

  </script>

</body>

</html>