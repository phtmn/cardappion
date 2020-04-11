@extends('site.layouts.master')

@section('content')


<div class="header bg-white pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">          
          <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
            <i class="ni ni-bullet-list-67"></i>

          </div>
          <h3 class="display-5 text-dark d-inline-block mb-0"> Produto</h3>
        </div>
        <div class="col-lg-6 col-5 text-right">
        <a class="text-dark" href=""><i class="ni ni-bold-left text-dark"></i> Voltar </a>

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
             
                @if (isset($product->image))                
                <img src="{{ url("{$product->image}") }}" class="img-fluid floating" style="width:150px; height:150px">
                @endif
              </a>

              <h5 class="h3 mt-3">
              {{ $product->title }}<span class="font-weight-light"></span>
              </h5>
              <div class="h5 font-weight-300">
              <div class="row justify-content-start">
                 
                  </div>
                <i class="ni location_pin mr-2"></i>
                
            </div> 
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
            <p>
            {{ $product->price_masked }} </p>
            <p>{{ $product->details }} </p>
            <p>
           

            </p>
            
          </div>
        </div>
      </div>


    </div>

  </div>

</div>
</div>
</div>



<body class="blog-posts">
    

    <section class="section">

        <div class="section section-item">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-md-12 ">
                   
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
