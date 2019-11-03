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

  <div class="container-fluid p-md-4">
    <div class="row">

      @foreach ($posts as $post)
      <div class="col-md-3">
        <div class="card">
          <img class="card-img-top" src="{{ $post->image }}" alt="{{ $post->title }}">
          <div class="card-body">
            <h5 class="h2 card-title mb-0">{{ $post->title }}</h5>
            <p class="card-text mt-4">{{ $post->subtitle }}</p>
            <a href="{{ route('site.blog.show', [ 'slug' => $post->slug ] ) }}" class="btn btn-link px-0">Ver
              Notícia</a>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</body>

</html>
