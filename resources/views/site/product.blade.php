@extends('site.layouts.master')

@section('content')

<body class="blog-posts">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent headroom">
        <div class="container">
        <a class="navbar-brand mr-lg-5" href="../../../index.html">
            <img src="{{asset('vendor/argon/assets/img/brand/logo4.png')}}">
        </a>
        <div class="navbar-collapse collapse" id="navbar_global">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                    </div>
                </div>
            </div>
            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item">
                    <a href="{{ route('cart.checkout', ['token' => $token]) }}" class="btn btn-warning ml-3">Sacola <i class="ni ni-cart"></i></a href="{{ route('cart.checkout', ['token' => $token]) }}">
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <section class="section">

        <div class="section section-item">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-md-12 ">
                    <img class="img-center image-container" src="{{ url("{$product->image}") }}" alt="{{ $product->title }}">
                </div>
                <div class="col-lg-6 col-md-12 mx-auto">
                  <h2 class="title">{{ $product->title }}</h2>
                  <br>
                    <h2 class="main-price">{{ $product->price_masked }}</h2>
                  <h6 class="category">Descrição</h6>
                  <p class="description">{{ $product->details }}</p>
                  <br>
                  <div class="row pick-size">
                    <div class="col-lg-4 col-md-4">
                      <label>Quantidade</label>
                      <div class="input-group">
                        <div class="input-group-btn">
                          <button id="down" class="btn btn-outline-warning btn-round" onclick="down('0')"><i class="ni ni-fat-delete"></i></button>
                        </div>
                        <input type="text" id="myNumber" class="form-control input-number" value="1">
                        <div class="input-group-btn">
                          <button id="up" class="btn btn-outline-warning btn-round" onclick="up('100')"><i class="ni ni-fat-add"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row justify-content-start">
                    <button class="btn btn-warning ml-3 addCart" data-id="{{ $product->id }}">Adicionar na Sacola &nbsp;<i class="ni ni-cart"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
@stop
