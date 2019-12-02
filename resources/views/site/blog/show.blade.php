
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
                <h1 class="display-2 text-dark font-weight-bold mb-0">
                  <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                    <i class="ni ni-world"></i>
                  </div> Blog
                </h1>
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
    </section>

    <section class="section section-lg pt-lg-0 mt--6 bg-gradient-warning">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row card-wrapper">
              <div class="col-md-1">
              </div>
              
              <div class="col-md-6">                
              <!-- <img class="card-img-top" src="{{asset('vendor/argon/assets/img/brand/menu.png')}}"  > -->
                <div class="card">
                <img class="card-img-top" src="{{asset('vendor/argon/assets/img/brand/menu.png')}}"  >
                  <!-- <img class=" " src="{{ asset($post->image)}}"  > -->
                  <div class="card-body">
                    <p class="text-dark m-0">
                      <h6 class="h4 card-title mb-0"> <b>{{ $post->subtitle }} </h6></b>
                    </p>
                    <p class="  mb-0" align="justify" style="text-indent: 15px;"> {!! $post->body !!}</p>
                    <!-- <p class="card-text mt-4">{{ $post->subtitle }}</p> -->
                  </div> <!-- <a href="{{ route('site.blog.show', [ 'slug' => $post->slug ] ) }}" class="btn btn-link px-0 text-center text-warning">Ler Mais</a> -->
                </div>
              </div>
              <div class="col-md-4">                
                <div class="card ">
                  <center> <img src="{{asset('vendor/argon/assets/img/brand/logo3.png')}}" class="img-fluid floating" style="width:150px; height:150px "> </center>
                  <div class="card-body">
                    <p class="text-dark m-0 text-center">
                      Todas as novidades em um único lugar.
                      <h6 class="h4 card-title mb-0 text-center"> <b>info@cardappion.com.br </h6></b>
                    </p>
                    <hr>
                    <h4 class="h2 card-title mb-0 text-center"> Postagens mais recentes </h4>                    
                    @foreach ($posts as $post)
                    <div class="col-md-12">                     
                      <div class="card-body">
                        <ul class="list-group list-group-flush list my--1">
                          <li class="list-group-item px-0">
                            <div class="row align-items-center">
                              <div class="col-auto">
                                <!-- Avatar -->
                                <a href="#" class="col-auto">
                                  <img alt="Image placeholder" src="{{ asset($post->image) }}" class="avatar ">
                                  
                                </a>
                                
                              </div>
                              <div class="col ml--2">
                              
                                <p class="mb-0">
                                  <a class="h5 card-title " href="{{ route('site.blog.show', [ 'slug' => $post->slug ] ) }}">{{ $post->subtitle }}</a>
                                </p>
                                <!-- <span class="text-success">●</span> -->
                                <small><a href="{{ route('site.blog.show', [ 'slug' => $post->slug ] ) }}">{{ $post->created_at->format('d/m/Y') }}</a></small>
                              </div>
                              <div class="col-auto">
                    <!-- <button type="button" class="btn btn-sm btn-primary">Add</button> -->
                  </div>
                            </div>
                          </li>

                        </ul>
                      </div>

                    </div>
                    @endforeach

                  </div>
                </div>
              </div>              
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>
@stop

