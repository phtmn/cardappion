<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="description" content="Ponto de Coleta - Seja parte dessa mudança">
  <meta name="keywords" content="Ponto de Coleta, empreendedorismo social, design sustentavel, economia cirular, minimalismo">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

  <title>{{ $tenant->name }}</title>

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

</head>

<body class="#ffffff white">
  <!-- Navbar and Header -->

  <nav class="nav-extended #172b4d blue-grey darken-4">
    <div class="nav-background">
      <div class="ea k" style="background-image: url('');"></div>
    </div>

    <div class="nav-wrapper db">

      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

      <ul class="bt hide-on-med-and-down">
        <li><a class="dropdown-button" data-activates="endereco" data-belowOrigin="true" data-constrainWidth="false">Endereço<i class="material-icons bt">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button" data-activates="contato" data-belowOrigin="true" data-constrainWidth="false">Contato<i class="material-icons bt">arrow_drop_down</i></a></li>
       </ul>
      <ul id="endereco" class="dropdown-content">
        <li><a>{{$config->address ?? ''}}, {{$config->neighborhood ?? ''}} - {{$config->city ?? ''}} {{$config->us ?? ''}}</a></li>
        
      </ul>
      <ul id="contato" class="dropdown-content">
        <li><a href="/pages/full-header">WhatsApp</a></li>
        <li><a href="/pages/horizontal">Telegram</a></li>
        <li><a href="/pages/horizontal">Instagram</a></li>
        <li><a href="/pages/no-image">Facebook</a></li>
        <li><a href="/pages/no-image">Site</a></li>
      </ul>

    


      <div class="nav-header de">

        <h2>


          @if($config->image ?? '')
          <img src="{{ Storage::url("{$config->image }") }}" class="img-fluid rounded-circle shadow" style="width:225px; height:225px">

          @else
          <img src="{{asset('vendor/argon/assets/img/brand/no_foto.png')}}" class="img-fluid rounded-circle shadow" style="width:225px; height:225px">
          @endif

        </h2>
        <div class="ge "> {{ $tenant->name }}

        </div>
        
      </div>
    </div>

    @include('site.landingPage.menus')


  </nav>

  <ul class="side-nav" id="nav-mobile" style="transform: translateX(-100%);">
    <li><a href="https://pontodecoleta.com.br"><b>Endereço</b></a></li>
    <li><a>{{$config->address ?? ''}}, {{$config->neighborhood ?? ''}} </a></li>
    <li><a> {{$config->city ?? ''}} {{$config->us ?? ''}}</a></li>
   
   <hr>
    <li><a href="https://pontodecoleta.com.br">WhatsApp</a></li>
    <li><a href="https://pontodecoleta.com.br/register">Telegram</a></li>
    <li><a href="https://pontodecoleta.com.br/login">Instagram</a></li>
    <li><a href="https://pontodecoleta.com.br/login">Facebook</a></li>
    <li><a href="https://pontodecoleta.com.br/login">Site</a></li>
    
  </ul>


  @include('site.landingPage.products')


  <!-- Core Javascript -->
  <script src="https://pontodecoleta.com.br/layouts/site/js/jquery.js "></script>
  <script src="https://pontodecoleta.com.br/layouts/site/js/materialize.js "></script>
  <script src="https://pontodecoleta.com.br/layouts/site/js/gallery.js "></script>

</body>

</html>