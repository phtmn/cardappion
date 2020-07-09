<!DOCTYPE html>
<html>

@include('site.layouts._head_m') 

<body class="bg-white">
<section class=" bg-white ">
@include('site.layouts._nav')

<div class="main-content  mt-6 ">
  <div class="header  pb-6">
    <div class="container-fluid">
 
    </div>
  </div>
 

  <div class="container-fluid mt--5">
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
              <div class=" mb-1">
                <div class="card-header p-0" id="heading{{ $loop->index }}" data-toggle="collapse" data-target="#collapse{{ $loop->index }}" aria-expanded="true" aria-controls="collapse{{ $loop->index }}">
                  <h5 class="mb-0 m-3">
                    
                      <i class="ni ni-ungroup text-default"></i> {{ $category->description }} 
                    
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
                                  <a href="{{ route('site.menu.product', ['token' => $token,'id' => $product->id]) }}">{{ substr ($product->title, 0,22) }} ... </a>
                                </h4>
                                
                              </div>
                              <div class="col-auto">
                              
                              @if (($product->price) != "0")
                                
                              <label><b>R$ {{ number_format($product->price,2,',','.')}}</b></label>
                                @endif
                            
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
</section>
<section class="py-8 bg-white ">

</section>


@include('site.layouts._footer')

</body>

</html>