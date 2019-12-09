@extends('layouts.site.master')

@section('content')
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
                <h2 class="display-4 text-dark font-weight-light">Todas as novidades em um único lugar.</h2>
                <!-- <h2 class="display-4 text-dark font-weight-light">Todos os cardápios e promoções em um único lugar.</h2> -->
               
                <div class="mt-5">
                  <!-- <p class="lead text-white">
            Temos uma plataforma perfeita para o seu negócio, seja ele do tamanho que for.
            </p> -->
                </div>
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
          <div class="col-lg-10">
            <div class="row card-wrapper">
              @foreach ($posts as $post)
              
              <div class="col-md-3">
                <!-- <div class="card card-lift--hover  bg-warning"> -->
                <div class="card">
                  <img class="card-img-top" src="{{ $post->image }}" alt="{{ $post->title }}" style=" height:150px">
                  <div class="card-body">
                    <p class="text-dark m-0">
                      <h6 class="h4 card-title mb-0"> <b>{{ $post->created_at->format('d/m/Y') }} </h6></b>
                    </p>
                    <h4  class="h2 card-title mb-0"><a href="{{ route('site.blog.show', [ 'slug' => $post->slug ] ) }}"> {{ $post->title }}</a></h4>
                    <!-- <p class="card-text mt-4">{{ $post->subtitle }}</p> -->
                  </div> <!-- <a href="{{ route('site.blog.show', [ 'slug' => $post->slug ] ) }}" class="btn btn-link px-0 text-center text-warning">Ler Mais</a> -->
                </div>
              </div>
              <!-- </div> -->

              @endforeach
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>

@stop
