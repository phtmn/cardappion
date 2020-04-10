{{-- @extends('site.layouts.master_design') --}}

@extends('site.layouts.master')



@section('content')

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
          <h3 class="display-5 text-dark d-inline-block mb-0"> Sobre</h3>
        </div>
        <div class="col-lg-6 col-5 text-right">


        </div>
      </div>
    </div>
  </div>
</div>

<!-- s1  -->
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-lg-4">
      <div class="card-wrapper">
        <div class="card ">
          <div class="card-body">
            <div class="text-center">
              <a href="#">
                @if (isset($config->image))
                <img src="{{ Storage::url("{$config->image}") }}" class="img-fluid floating" style="width:150px; height:150px">
                @endif
              </a>

              <h5 class="h3 mt-3">
                {{ $tenant->name }}<span class="font-weight-light"></span>
              </h5>
              {{--<div class="h5 font-weight-300">
                <i class="ni location_pin mr-2"></i>{{ auth()->user()->email }}
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8">
    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h5 class="mb-0">Collapsible Group Item #1</h5>
        </div>
        <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <p>{{$config->zipcode}}</p>
            <p>{{$config->zipcode}}</p>
            <p>{{$config->zipcode}}</p>
            <p>{{$config->zipcode}}</p>
            <p>{{$config->zipcode}}</p>
            <p>{{$config->zipcode}}</p>
            <p>{{$config->zipcode}}</p>
          </div>
        </div>
      </div>
      
      
    </div>
    <!-- <div class="card-wrapper">
        <div class="card ">
          <div class="card-header">
            <h3 class="mb-0"> {{ Auth::user()->tenant->name }}</h3>
          </div>
          <div class="card-body">
                        
              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right ">CEP
                </label>
                <div class="col-md-3">
                  <input type="text" name="zipcode" class="form-control" value="{{$config->zipcode}}" id="cep" maxlength="8">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Endereço
                </label>
                <div class="col-md-6">
                  <input type="text" name="address" class="form-control" value="{{$config->address}}" id="address">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Bairro
                </label>
                <div class="col-md-4">
                  <input type="text" name="neighborhood" class="form-control" value="{{$config->neighborhood}}" id="neighborhood">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Cidade
                </label>
                <div class="col-md-6">
                  <input type="text" name="city" class="form-control" value="{{$config->city}}" id="city">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Estado
                </label>
                <div class="col-md-2">
                  <input type="text" name="us" class="form-control" value="{{$config->us}}" id="us">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Taxa de Entrega (R$)
                </label>
                <div class="col-md-3">
                  <input type="text" name="delivery" class="form-control" value="{{$config->delivery_masked}}" id="delivery">
                </div>
              </div>
            
              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">WhatsApp
                </label>
                <div class="col-md-4">
                  <input type="text" name="whatsapp" class="form-control" value="{{$config->whatsapp}}" id="whatsapp">
                </div>
              </div>

              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Instagram </label>
                <div class="col-md-7">
                  <input type="text" name="instagram" class="form-control" value="{{$config->instagram}}">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Facebook
                </label>
                <div class="col-md-7">
                  <input type="text" name="fanpage" class="form-control" value="{{$config->fanpage}}">
                </div>
              </div>

              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Site
                </label>
                <div class="col-md-7">
                  <input type="text" name="site" class="form-control" value="{{$config->site}}">
                </div>
              </div>

              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Informações adicionais </label>
                <div class="col-md-6">
                  <textarea name="details" rows="5" resize="none" class="form-control" maxlenght="500">{{$config->details}}</textarea>
                </div>
              </div>

              
            
          </div>
        </div>
      </div> -->
  </div>

</div>
</div>
</div>
<!-- s1  -->
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
    <div class="col-lg-4">
      <div class="card-wrapper">
        <div class="card ">
          <div class="card-body">
            <div class="text-center">
              <a href="#">
                @if (isset($config->image))
                <img src="{{ Storage::url("{$config->image}") }}" class="img-fluid floating" style="width:150px; height:150px">
                @endif
              </a>

              <h5 class="h3 mt-3">
                {{ $tenant->name }}<span class="font-weight-light"></span>
              </h5>
              {{--<div class="h5 font-weight-300">
                <i class="ni location_pin mr-2"></i>{{ auth()->user()->email }}
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8">
    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h5 class="mb-0">Collapsible Group Item #1</h5>
        </div>
        <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <p>{{$config->zipcode}}</p>
            <p>{{$config->zipcode}}</p>
            <p>{{$config->zipcode}}</p>
            <p>{{$config->zipcode}}</p>
            <p>{{$config->zipcode}}</p>
            <p>{{$config->zipcode}}</p>
            <p>{{$config->zipcode}}</p>
          </div>
        </div>
      </div>
      
      
    </div>
    <!-- <div class="card-wrapper">
        <div class="card ">
          <div class="card-header">
            <h3 class="mb-0"> {{ Auth::user()->tenant->name }}</h3>
          </div>
          <div class="card-body">
                        
              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right ">CEP
                </label>
                <div class="col-md-3">
                  <input type="text" name="zipcode" class="form-control" value="{{$config->zipcode}}" id="cep" maxlength="8">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Endereço
                </label>
                <div class="col-md-6">
                  <input type="text" name="address" class="form-control" value="{{$config->address}}" id="address">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Bairro
                </label>
                <div class="col-md-4">
                  <input type="text" name="neighborhood" class="form-control" value="{{$config->neighborhood}}" id="neighborhood">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Cidade
                </label>
                <div class="col-md-6">
                  <input type="text" name="city" class="form-control" value="{{$config->city}}" id="city">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Estado
                </label>
                <div class="col-md-2">
                  <input type="text" name="us" class="form-control" value="{{$config->us}}" id="us">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Taxa de Entrega (R$)
                </label>
                <div class="col-md-3">
                  <input type="text" name="delivery" class="form-control" value="{{$config->delivery_masked}}" id="delivery">
                </div>
              </div>
            
              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">WhatsApp
                </label>
                <div class="col-md-4">
                  <input type="text" name="whatsapp" class="form-control" value="{{$config->whatsapp}}" id="whatsapp">
                </div>
              </div>

              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Instagram </label>
                <div class="col-md-7">
                  <input type="text" name="instagram" class="form-control" value="{{$config->instagram}}">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Facebook
                </label>
                <div class="col-md-7">
                  <input type="text" name="fanpage" class="form-control" value="{{$config->fanpage}}">
                </div>
              </div>

              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Site
                </label>
                <div class="col-md-7">
                  <input type="text" name="site" class="form-control" value="{{$config->site}}">
                </div>
              </div>

              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Informações adicionais </label>
                <div class="col-md-6">
                  <textarea name="details" rows="5" resize="none" class="form-control" maxlenght="500">{{$config->details}}</textarea>
                </div>
              </div>

              
            
          </div>
        </div>
      </div> -->
  </div>

</div>
</div>
</div>

<body class="blog-posts">


  {{-- @include('site.show_s1') --}}

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