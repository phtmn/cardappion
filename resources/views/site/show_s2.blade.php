<!-- s2  -->
<div class="header bg-white pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <!-- <i class="ni ni-collection text-white"></i>
                    <h3 class="h3 text-white d-inline-block mb-0">Menu</h3> -->
          <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
            <i class="ni ni-collection"></i>

          </div>
          <h3 class="display-5 text-dark d-inline-block mb-0"> Menu</h3>
        </div>
        <div class="col-lg-6 col-5 text-right">


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

            @foreach ($categories as $category)
            <div class="card mb-1">
              <div class="card-header p-0" id="heading{{ $loop->index }}" data-toggle="collapse" data-target="#collapse{{ $loop->index }}" aria-expanded="true" aria-controls="collapse{{ $loop->index }}">
                <h5 class="mb-0">
                  <h2 class="btn btn-link w-100 text-primary text-left" type="button" data-toggle="collapse" data-target="#collapse{{ $loop->index }}" aria-expanded="true" aria-controls="collapse{{ $loop->index }}">
                    <i class="ni ni-ungroup text-default"></i> <i class="text-default"> {{ $category->description }}


                  </h2>


                </h5>
              </div>

              <div id="collapse{{ $loop->index }}" class="collapse" aria-labelledby="heading{{ $loop->index }}" data-parent="#accordionExample">
                <div class="card-body opacity-8">
                  <div class="row">
                    {{-- @foreach ($category->products as $product)
                      <div class="card text-center col-md-4" style="width: 20rem;">
                        <img class="card-img-top" src="{{ url("{$product->image}") }}" alt="{{ $product->title }}">
                    <div class="card-body">
                      <h4 class="card-title">{{ $product->title }}</h4>
                      <p class="card-text">{{ $product->details }}</p>
                      <a href="{{ route('site.menu.product', ['token' => $token,'id' => $product->id]) }}" class="btn btn-sm btn-primary">Ver Produto</a>
                    </div>
                  </div>
                  @endforeach --}}

                  <div class="card-body p-1">
                    <ul class="list-group list-group-flush list my--3 ">
                      @foreach ($category->products as $product)
                      <li class="list-group-item px-0">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->

                            <a href="{{ route('site.menu.product', ['token' => $token,'id' => $product->id]) }}">
                              <img class="avatar" src="{{ url("{$product->image}") }}" alt="{{ $product->title }}">
                            </a>


                          </div>
                          <div class="col ml--2">
                            <h4 class="mb-0">
                              <a href="{{ route('site.menu.product', ['token' => $token,'id' => $product->id]) }}">{{ $product->title }}</a>
                            </h4>

                            <!-- <span class="text-success">●</span> -->
                            <small>R$ {{ number_format($product->price,2,',','.')}}</small>
                          </div>
                          <div class="col-auto">

                            <!-- <button type="button" class="btn btn-sm btn-primary">Add</button> -->


                          </div>
                        </div>



                      </li>
                      @endforeach





                    </ul>
                  </div>
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


</div>
</div>