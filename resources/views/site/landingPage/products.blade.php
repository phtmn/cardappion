<div id="portfolio" class="cx gray">

  <div class="db mt-3">

    <div class="b e" style="position: relative; height: 1547.28px;">
      @forelse ($categories as $category)
      @forelse ($category->products as $product)
      @if (($product->active) != "0")
      <div class=" d hx hf gu gallery-item gallery-expand ce {{ $category->id }}" style="position: absolute; ">
        <div class="gallery-curve-wrapper">

          {{-- @if(!$product->image1)

          @else
          <a class="gallery-cover gray">
            <img src="{{ Storage::url($product->image1) }}" style="width:100%; height:100%">
          </a>
          @endif
          --}}

          <div class="gallery-header">


            <div class="card-content">
              <ul class="collection with-header">

                <li class="collection-item">
                  <div> <span class="card-title activator grey-text text-darken-4">{{ substr ($product->title, 0,20) }}... </span><a href="#" class="secondary-content" style="color: #fb6340"> <b>
                        @if (($product->price) != "0")
                        R$ {{ number_format($product->price,2,',','.')}}
                        @endif
                      </b></a></div>
                </li>
              </ul>


            </div>


          </div>
          <div class="gallery-body">
            <div class="title-wrapper">

              <h4>{{ $product->title}}</h4>
              <span class="gj" style="color: #fb6340"> @if (($product->price) != "0")
                R$ {{ number_format($product->price,2,',','.')}}
                @endif</span>
            </div>




            <div class="col s12 m6 l4">
              <div class="card">

                @if(!$product->image1)
                
                @else
                <div class="card-image mb-1 center-align">
                  <img width="100%" class="responsive-img wp-post-image" src="{{ Storage::url("{$product->image1}") }}">
                </div>
                @endif

                @if(!$product->image2)
                
                @else
                <div class="card-image mb-1 center-align">
                  <img width="100%" class="responsive-img wp-post-image" src="{{ Storage::url("{$product->image2}") }}">
                </div>
                @endif

                @if(!$product->image3)
                
                @else
                <div class="card-image mb-1 center-align">
                  <img width="100%" class="responsive-img wp-post-image" src="{{ Storage::url("{$product->image3}") }}">
                </div>
                @endif


              </div>


            </div>





            <p class="fi">

              @if($product->details)
              <label class="col-form-label form-control-label text-right p-3" style="color: #5e72e4">Informações adicionais </label>
            <p style="text-indent: 25px;" align="justify">{{$product->details}}</p>
            @else
            @endif

            @if($product->nutritional_value)
            <label class="col-form-label form-control-label text-right p-3" style="color: #5e72e4">Valor nutricional </label>
            <p style="text-indent: 25px;" align="justify">{{$product->nutritional_value}}</p>
            @else
            @endif

            @if($product->origin_inputs)
            <label class="col-form-label form-control-label text-right p-3" style="color: #5e72e4">Origem do insumos </label>
            <p style="text-indent: 25px;" align="justify">{{$product->origin_inputs}}</p>
            @else
            @endif

            @if($product->serving_suggestion)
            <label class="col-form-label form-control-label text-right p-3" style="color: #5e72e4">Sugestão de porção - Rendimento </label>
            <p style="text-indent: 25px;" align="justify">{{$product->serving_suggestion}}</p>
            @else
            @endif

            @if($product->linked_revenue)
            <label class="col-form-label form-control-label text-right p-3" style="color: #5e72e4">Receita vinculada </label>
            <p style="text-indent: 25px;" align="justify">{{$product->linked_revenue}}</p>
            @else
            @endif

            @if($product->service_suggestion)
            <label class="col-form-label form-control-label text-right p-3" style="color: #5e72e4">Sugestão de serviço </label>
            <p style="text-indent: 25px;" align="justify">{{$product->service_suggestion}}</p>
            @else
            @endif

            @if($product->harmonization)
            <label class="col-form-label form-control-label text-right p-3" style="color: #5e72e4">Harmonização </label>
            <p style="text-indent: 25px;" align="justify">{{$product->harmonization}}</p>
            @else
            @endif

            @if($product->curiosities)
            <label class="col-form-label form-control-label text-right p-3" style="color: #5e72e4">Curiosidades </label>
            <p style="text-indent: 25px;" align="justify">{{$product->curiosities}}</p>
            @else
            @endif
            </p>

          </div>
          <!--<div class="gallery-action">
            <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
          </div> -->
        </div>

      </div>



      @endif
      @empty
      <!-- <p class="text-danger">Nenhum produto cadastrado na categoria!</p> -->
      @endforelse
      @empty
      <p class="text-danger">Nenhuma categoria cadastrada!</p>
      @endforelse



    </div>
  </div>
</div>