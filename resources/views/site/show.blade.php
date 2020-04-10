{{-- @extends('site.layouts.master_design') --}}

@extends('site.layouts.master') 
  
  @section('content')

<body class="blog-posts">

  
  @include('site.show_s1')

  {{-- @include('site.show_s2')  --}}

  {{-- @include('site.show_s3')	 --}}

  {{-- @include('site.show_s4')	 --}}





  <section class="section">

  

    <div class="accordion-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ml-auto">
                    <div class="accordion my-3" id="accordionExample">

                        @foreach ($categories as $category)
                        <div class="card">
                            <div class="card-header" id="heading{{ $loop->index }}" data-toggle="collapse" data-target="#collapse{{ $loop->index }}" aria-expanded="true" aria-controls="collapse{{ $loop->index }}">
                                <h5 class="mb-0">
                                 <h2 class="btn btn-link w-100 text-primary text-left" type="button" data-toggle="collapse" data-target="#collapse{{ $loop->index }}" aria-expanded="true" aria-controls="collapse{{ $loop->index }}">
                                   {{ $category->description }}
                                        

</h2>

                                  
                                </h5>
                            </div>

                            <div id="collapse{{ $loop->index }}" class="collapse" aria-labelledby="heading{{ $loop->index }}" data-parent="#accordionExample">
                                <div class="card-body opacity-8">
                                    <div class="row">
                                        @foreach ($category->products as $product)
                                            <div class="card text-center col-md-4" style="width: 20rem;">
                                                <img class="card-img-top" src="{{ url("{$product->image}") }}" alt="{{ $product->title }}">
                                                <div class="card-body">
                                                    <h4 class="card-title">{{ $product->title }}</h4>
                                                    <p class="card-text">{{ $product->details }}</p>
                                                    <a href="{{ route('site.menu.product', ['token' => $token,'id' => $product->id]) }}" class="btn btn-sm btn-primary">Ver Produto</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>















  </section>









    @stop
