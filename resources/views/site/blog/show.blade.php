</html>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>{{ config('app.name') }}</title> 
  <link rel="stylesheet" href="{{ asset('assets/css/stilo.css') }}" type="text/css">
  <link rel="icon" href="{{ asset('vendor/argon/assets/img/brand/logo3.png') }}" type="image/png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
    type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/css/argon.min.css?v=1.0.0') }}" type="text/css">

 <style>
  #div2 {
    max-width: 40ch;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
</style>
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/lavalamp/js/jquery.lavalamp.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>
  <script src="{{ asset('assets/js/argon.min.js?v=1.0.0') }}"></script>
  <script src="{{ asset('assets/js/demo.min.js') }}"></script>


  <script src="{{ asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('/vendor/unisharp/laravel-ckeditor/adapters/jquery.js') }}"></script>
    <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered

        CKEDITOR.replace( 'your_id' );
    </script>



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




  <section class="section section-lg pt-lg-0 mt--6 bg-gradient-warning">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row card-wrapper">
              

            <div class="col-md-1">
                <!-- <div class="card card-lift--hover  bg-warning"> -->
              
              </div>
              <div class="col-md-6">
                <!-- <div class="card card-lift--hover  bg-warning"> -->
                <div class="card">
                  <img class="card-img-top" src="{{ $post->image }}" alt="{{ $post->title }}" style=" height:150px">
                  <div class="card-body">
                    <p class="text-dark m-0">
                      <h6 class="h4 card-title mb-0"> <b>{{ $post->subtitle }} </h6></b>
                    </p>
                    <h4 class="h4  mb-0" align="justify" style="text-indent: 15px;">  {!! $post->body !!}</h4>
                    <!-- <p class="card-text mt-4">{{ $post->subtitle }}</p> -->
                  </div> <!-- <a href="{{ route('site.blog.show', [ 'slug' => $post->slug ] ) }}" class="btn btn-link px-0 text-center text-warning">Ler Mais</a> -->
                </div>
              </div>

           

              <div class="col-md-4">
                <!-- <div class="card card-lift--hover  bg-warning"> -->
                <div class="card ">
         <center> <img src="{{asset('vendor/argon/assets/img/brand/logo3.png')}}" class="img-fluid floating"
                  style="width:150px; height:150px " > </center>
                  <div class="card-body">
                    
                    <p class="text-dark m-0 text-center">
                    Todas as novidades em um único lugar.
                      <h6 class="h4 card-title mb-0 text-center"> <b>info@cardappion.com.br </h6></b>
                    </p>
                    <hr>
                    <h4 class="h2 card-title mb-0">   </h4>
                    <!-- <p class="card-text mt-4">{{ $post->subtitle }}</p> -->
                    @foreach ($posts as $post)
              <div class="col-md-12">
                <!-- <div class="card card-lift--hover  bg-warning"> -->
                <div class="card-body">
            <!-- List group -->
            <ul class="list-group list-group-flush list my--3">
              <li class="list-group-item px-0">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <a href="#" class="avatar ">
                      <img alt="avatar" src="{{ $post->image }}">
                    </a>
                  </div>
                  <div class="col ml--2">
                    <h4 class="mb-0">
                      <a href="{{ route('site.blog.show', [ 'slug' => $post->slug ] ) }}">{{ $post->title }}</a>
                    </h4>
                    <!-- <span class="text-success">●</span> -->
                    <small ><a href="{{ route('site.blog.show', [ 'slug' => $post->slug ] ) }}">{{ $post->created_at->format('d/m/Y') }}</a></small>
                  </div>
                  <!-- <div class="col-auto">
                    <button type="button" class="btn btn-sm btn-primary">Add</button>
                  </div> -->
                </div>
              </li>
             
            </ul>
          </div>
                
              </div>
              

              @endforeach
                  </div> 
                </div>
              </div>
              <!-- </div> -->

              
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>
</body>

</html>
