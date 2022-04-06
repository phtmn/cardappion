<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="description" content="Ponto de Coleta - Seja parte dessa mudança">
  <meta name="keywords" content="Ponto de Coleta, empreendedorismo social, design sustentavel, economia cirular, minimalismo">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

  <title>{{ $tenant->name }}</title>

  <link rel="stylesheet" href="{{ asset('assets/css/stilo.css') }}" type="text/css">
  <link rel="icon" href="{{ asset('vendor/argon/assets/img/brand/on.png') }}" type="image/png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/css/argon.min.css?v=1.0.0') }}" type="text/css">


  <!-- Stylesheet -->
  <link rel="stylesheet" href="https://pontodecoleta.com.br/layouts/site/css/gallery-materialize.css" type="text/css">

  <!-- Material Icons -->
  <link rel="stylesheet" href="https://pontodecoleta.com.br/layouts/site/css/icon.css" type="text/css">

  <link rel="canonical" href="https://themes.materializecss.com/pages/demo">

  <link rel="manifest" href="https://pontodecoleta.com.br/./manifest.json">

  <link rel="shortcut icon" href="https://pontodecoleta.com.br/layouts/site/img/logo-ponto-de-coleta-pin.png" />

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://pontodecoleta.com.br/layouts/site/css/materialize.min.css" type="text/css">

</head>

<body class="#525f7f bg-default">
  <!-- Navbar and Header -->

  <nav class="nav-extended  white">
    <div class="nav-background">
      <div class="ea k" style="background-image: url('');"></div>
    </div>

    <div class="nav-wrapper db text-dark">

      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons text-dark">menu</i></a>

      <ul class="bt hide-on-med-and-down">
        <li><a class="dropdown-button" data-activates="endereco" data-belowOrigin="true" data-constrainWidth="false">Endereço<i class="material-icons bt">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button" data-activates="contato" data-belowOrigin="true" data-constrainWidth="false">Contato<i class="material-icons bt">arrow_drop_down</i></a></li>
      </ul>
      <ul id="endereco" class="dropdown-content">
        <li><a>{{$config->address ?? ''}}, {{$config->neighborhood ?? ''}} - {{$config->city ?? ''}} {{$config->us ?? ''}}</a></li>

      </ul>
      <ul id="contato" class="dropdown-content ">
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




      <div class="nav-header de">

        <h2>


          @if($config->image ?? '')
          <img src="{{ Storage::url("{$config->image }") }}" class="img-fluid rounded-circle shadow" style="width:225px; height:225px">

          @else
          <img src="{{asset('vendor/argon/assets/img/brand/no_foto.png')}}" class="img-fluid rounded-circle shadow" style="width:225px; height:225px">
          @endif

        </h2>
        <div class="ge text-dark mt-1"> <b>{{ $tenant->name }}</b>

        </div>

      </div>
    </div>

    @include('site.landingPage.menus')


  </nav>

  <ul class="side-nav" id="nav-mobile" style="transform: translateX(-100%);">
    <li><b class="p-2">Endereço</b></li>
    <li><a>{{$config->address ?? ''}}, {{$config->neighborhood ?? ''}} </a></li>
    <li><a> {{$config->city ?? ''}} {{$config->us ?? ''}}</a></li>

    <hr>
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


  <!-- Core Javascript -->
  <script src="https://pontodecoleta.com.br/layouts/site/js/jquery.js "></script>
  <script src="https://pontodecoleta.com.br/layouts/site/js/materialize.js "></script>
  <script src="https://pontodecoleta.com.br/layouts/site/js/gallery.js "></script>

</body>

</html>