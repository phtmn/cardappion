<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim"> -->
  
  <title>{{ config('app.name') }}</title>

  <link rel="stylesheet" href="{{ asset('assets/css/stilo.css') }}" type="text/css">  
  <link rel="stylesheet" href="{{ asset('assets/css/galeria.css') }}" type="text/css">
  <link rel="icon" href="{{ asset('vendor/argon/assets/img/brand/logo3.png') }}" type="image/png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/css/argon.min.css?v=1.0.0') }}" type="text/css">
</head>

<body class="bg-black">
  @yield('content')
  @stack('scripts')
  
  @include('layouts.site.m._nav_top')
  @include('layouts.site.m._main')
  @include('layouts.site.m._nav_bottom')
  
</body>
</html>

<script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/lavalamp/js/jquery.lavalamp.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>
  <script src="{{ asset('assets/js/argon.min.js?v=1.0.0') }}"></script>
  <script src="{{ asset('assets/js/demo.min.js') }}"></script>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!-- Google Analytics phtolentinon@gmail.com -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148440473-1"></script>
  
  <script src="{{asset('js/jquery.mask.min.js')}}"> </script>
  <script>
	$('body').on('click', '.detalhe-promocao', function() {
		var promotion_id = $(this).data('id');
    
		$.get("{{ url('m/nnbm4wbv') }}" + '/' + promotion_id, function(data) {

			$('#modal-promocao').modal('show');
			$('#title').html(data.title);
			$('#data_dou').html(data.data_dou);
			$('#objetivos').html(data.objetivos);
			$('#link_vesalic').html(data.link_vesalic);					
			$('#valor_projeto').html(data.valor_projeto).mask('#.##0,00', {
				reverse: true
			});
			$('#valor_meta').html(data.valor_meta).mask('#.##0,00', {
				reverse: true
			});
		})
	});

  $('.item-category').on('click', function() {
      var url = $(this).data('route');

	$(document).ready(function() {
		$('#valor').mask('#.##0,00', {
			reverse: true
		});
	})
  </script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-148440473-1');
  </script>

  <!-- Google Adsense phtolentinon@gmail.com -->
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({
      google_ad_client: "ca-pub-5608530994046947",
      enable_page_level_ads: true
    });
  </script>

  <script>
    $('[data-fancybox="gallery"]').fancybox({
    // Options will go here
    });
    $().fancybox({
    selector : '.imglist a:visible'
    }); 
</script>






