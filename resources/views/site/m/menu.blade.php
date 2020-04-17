@extends('site.layouts.master')

@section('content')

<div class="main-content bg-gradient-default">
  <div class="header bg-white pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-2 col-7">
            <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
              <i class="ni ni-collection"></i>

            </div>
            
          </div>
          <div class="col-lg-10 col-5 text-right">
            <h4 class="display-5 text-dark d-inline-block mb-0"> Categorias do Menu</h4>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt--6">
    <div class="row">

      <div class="col-xl-12 col-md-6">

      </div>
    </div>
  </div>


  <section class="section">
    <div class="accordion-1">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ml-auto">
            <div class="accordion my-0" id="accordionExample">

              @forelse ($categories as $category)
              <div class="card mb-1">
                <div class="card-header p-0" id="heading{{ $loop->index }}" data-toggle="collapse" data-target="#collapse{{ $loop->index }}" aria-expanded="true" aria-controls="collapse{{ $loop->index }}">
                  <h5 class="mb-0">
                    <h2 class="btn btn-link w-100 text-primary text-left" type="button" data-toggle="collapse" data-target="#collapse{{ $loop->index }}" aria-expanded="true" aria-controls="collapse{{ $loop->index }}">
                      <i class="ni ni-ungroup text-default"></i> <b class="text-default"> {{ $category->description }} </b>
                    </h2>
                  </h5>
                </div>

                <div id="collapse{{ $loop->index }}" class="collapse" aria-labelledby="heading{{ $loop->index }}" data-parent="#accordionExample">
                  <div class="card-body opacity-8">
                    <div class="row">


                      <div class="card-body p-1">
                        <ul class="list-group list-group-flush list my--3 ">
                          @forelse ($category->products as $product)
                          @if (($product->active) != "0")
                          
                          

                          <li class="list-group-item px-0">
                            <div class="row align-items-center">
                              <div class="col-auto">
                                <div class="avatar-group">
                                  @if(!$product->image1)
                                  <a class="avatar " href="{{ route('site.menu.product', ['token' => $token,'id' => $product->id]) }}">
                                    <img src="{{asset('/vendor/argon/assets/img/brand/no_foto.png')}}" width="45" height="45">
                                  </a>
                                  @else
                                  <a class="avatar " href="{{ route('site.menu.product', ['token' => $token,'id' => $product->id]) }}">
                                    <img src="{{ Storage::url($product->image1) }}" width="45" height="45">
                                  </a>
                                  @endif
                                </div>

                              </div>
                              <div class="col ml--2">
                                <h4 class="mb-0">
                                  <a href="{{ route('site.menu.product', ['token' => $token,'id' => $product->id]) }}">{{ $product->title }}</a>
                                </h4>
                                @if (($product->price) != "0")
                                
                                <small>R$ {{ number_format($product->price,2,',','.')}}</small>
                                @endif
                              </div>
                              <div class="col-auto">
                                <!-- <button type="button" class="btn btn-sm btn-primary">Add</button> -->
                              </div>
                            </div>

                          </li>
                          @endif
                          @empty
                          <p class="text-danger">Nenhum produto cadastrado na categoria!</p>
                          @endforelse
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @empty
              <p class="text-danger">Nenhuma categoria cadastrada!</p>
              @endforelse

            </div>
          </div>
        </div>
      </div>
    </div>

  </section>


</div>
</div>

</div>
<section class="py-6 bg-gradient-default ">

</section>

@stop