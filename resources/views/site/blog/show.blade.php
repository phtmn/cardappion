</html>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>{{ config('app.name') }}</title>
  <link rel="stylesheet" href="{{ asset('assets/css/stilo.css') }}" type="text/css">
  <link rel="icon" href="{{ asset('vendor/argon/assets/img/brand/logo3.png') }}" type="image/png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
    type="text/css">
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
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!-- Google Analytics phtolentinon@gmail.com -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148440473-1"></script>
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

</head>

<body class="bg-black">
  @include('site._nav')


  <div class="main-content">
    <!-- Header -->
    <div class="header bg-white pt-5 pb-7">
      <div class="container">
        <div class="header-body">
          <div class="row align-items-center">
            <div class="col-lg-1">

            </div>
            <div class="col-lg-10">
              <div class="pr-5">
                <h1 class="display-2 text-dark font-weight-bold mb-0"><div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                  <i class="ni ni-world"></i>
                </div> Blog </h1>
                <h2 class="display-4 text-dark font-weight-light">{{ $post->title }}</h2>
                <h2 class="display-3 text-dark font-weight-light"> {{ $post->created_at->format('d/m/Y') }}</h2>
                
                
              </div>
            </div>
            <div class="col-lg-1">

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- </section>  -->

    </section>

  <div class="container-fluid pb-8">
    <div class="row">
      <div class="col-lg-1  pt-5">
        
      </div>
      <div class="col-lg-7  pt-5">
        <div class="header pb-6 d-flex align-items-center"
          style="min-height: 200px; background-image: url({{ url("{$post->image}") }}); background-size: cover; background-position: center top;">
          <!-- <span class="mask bg-gradient-default opacity-8"></span> -->
          <div class="container-fluid d-flex align-items-center">
            <div class="row">
              <div class="col-lg-6 col-md-10">
              <img class="card-img-top" src="{!! $post->image !!}"  style=" height:150px">
              <h2 class="display-2 text-dark font-weight-light">{!! $post->subtitle !!}</h2>
              <h2 class="display-4 text-dark font-weight-light">{!! $post->body !!}</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3  pt-5">
        <div class="header pb-6 d-flex align-items-center" >
          <!-- <span class="mask bg-dark"></span> -->
          <div class="container-fluid d-flex align-items-center">
            <div class="row">
              <div class="col-lg-6 col-md-10">
           
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-1  pt-5">
        
        </div>
    </div>
    <div class="row">
      <div class="col-md-8 offset-1 pt-2">
        <!-- <h2 class="display-2 text-dark font-weight-light">{!! $post->subtitle !!}</h2>
        <h2 class="display-2 text-dark font-weight-light">{!! $post->body !!}</h2> -->
        
      </div>
    </div>

  </div>
</body>

</html>
