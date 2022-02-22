<!DOCTYPE html>
<html>

@include('site.layouts._head_m') 


<body class="bg-white">
<section class=" bg-white ">


  @include('site.layouts._nav')



  <div class="main-content   mt-6">
    <div class="header  pb-6">
      <div class="container-fluid">
       
        </div>
      </div>
    </div>

    <div class="container-fluid mt--5">
      <div class="row">
        <div class="col-lg-4">
          <div class="card-wrapper">
            <div class=" ">
              <div class="card-body">
                <div class="text-center">
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">

                      @if(!$product->image1)
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('vendor/argon/assets/img/brand/no_foto.png')}}" style="width:180px; height:180px" alt="Terceiro Slide">
                      </div>
                      @else
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ Storage::url("{$product->image1}") }}" style="width:180px; height:180px" alt="Terceiro Slide">
                      </div>
                      @endif

                      @if(!$product->image2)
                      <div class="carousel-item ">
                        <img class="d-block w-100" src="{{asset('vendor/argon/assets/img/brand/no_foto.png')}}" style="width:180px; height:180px" alt="Terceiro Slide">
                      </div>
                      @else
                      <div class="carousel-item ">
                        <img class="d-block w-100" src="{{ Storage::url("{$product->image2}") }}" style="width:180px; height:180px" alt="Terceiro Slide">
                      </div>
                      @endif

                      @if(!$product->image3)
                      <div class="carousel-item ">
                        <img class="d-block w-100" src="{{asset('vendor/argon/assets/img/brand/no_foto.png')}}" style="width:180px; height:180px" alt="Terceiro Slide">
                      </div>
                      @else
                      <div class="carousel-item ">
                        <img class="d-block w-100" src="{{ Storage::url("{$product->image3}") }}" style="width:180px; height:180px" alt="Terceiro Slide">
                      </div>
                      @endif
                    </div>
                    
                  </div>
                  <div class="text-center">
                     <h5 class="h3">
                      {{ $product->title}}<span class="font-weight-light"></span>
                </h5> 
                    
                   
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 ">
          
            <div class="accordion" id="accordionExample">
              <div class="">
                <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <h5 class="mb-0">Mais Informações</h5>
                </div>
                <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                  @if($product->details)                  
                  <label class="col-form-label form-control-label text-right p-3">Informações adicionais </label>
                    <p style="text-indent: 25px;" align="justify">{{$product->details}}</p>                                      
                  @else               
                  @endif

                  @if($product->nutritional_value)
                  <label class="col-form-label form-control-label text-right p-3">Valor nutricional </label>
                    <p style="text-indent: 25px;" align="justify">{{$product->nutritional_value}}</p>                                      
                  @else               
                  @endif

                  @if($product->origin_inputs)
                  <label class="col-form-label form-control-label text-right p-3">Origem do insumos </label>
                    <p style="text-indent: 25px;" align="justify">{{$product->origin_inputs}}</p>                                      
                  @else               
                  @endif

                  @if($product->serving_suggestion)                  
                  <label class="col-form-label form-control-label text-right p-3">Sugestão de porção - Rendimento </label>
                    <p style="text-indent: 25px;" align="justify">{{$product->serving_suggestion}}</p>                                      
                  @else               
                  @endif

                  @if($product->linked_revenue)
                  <label class="col-form-label form-control-label text-right p-3">Receita vinculada </label>
                    <p style="text-indent: 25px;" align="justify">{{$product->linked_revenue}}</p>                                                        
                  @else               
                  @endif

                  @if($product->service_suggestion)                  
                  <label class="col-form-label form-control-label text-right p-3">Sugestão de serviço </label>
                    <p style="text-indent: 25px;" align="justify">{{$product->service_suggestion}}</p>                                      
                  @else               
                  @endif

                  @if($product->harmonization)                  
                  <label class="col-form-label form-control-label text-right p-3">Harmonização </label>
                    <p style="text-indent: 25px;" align="justify">{{$product->harmonization}}</p>                                      
                  @else               
                  @endif

                  @if($product->curiosities)                  
                  <label class="col-form-label form-control-label text-right p-3">Curiosidades </label>
                    <p style="text-indent: 25px;" align="justify">{{$product->curiosities}}</p>                                                      
                  @else               
                  @endif                  
                  
                </div>
              </div>             
            </div>
         
        </div>


      </div>


    </div>
  </div>
  </div>


  </section>
  <section class="py-8 bg-white ">

  </section>

 

  @include('site.layouts._footer')


</body>

</html>