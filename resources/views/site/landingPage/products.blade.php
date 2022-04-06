<div id="portfolio" class="cx gray">

  <div class="db">

    <div class="b e" style="position: relative; height: 1547.28px;">
      @forelse ($categories as $category)
      @forelse ($category->products as $product)
      @if (($product->active) != "0")
      <div class="d hx hf gu gallery-item gallery-expand ce {{ $category->id }}" style="position: absolute; ">
        <div class="placeholder">

          <div class="gallery-curve-wrapper">
            <div class="gallery-header">
              <span><b style="font-size: 20pt;"> {{ substr ($product->title, 0,22) }} </b></span>
            </div>

            <div class="gallery-body" style="margin-top: 216px; padding: 40px; min-height: 677px; display: none;">
              <div class="title-wrapper" style="">
                <br>
                <span class="gj">
                  <h4> Evoluímos na forma como consumimos? </h4>
                </span>
                <hr>
                <span class="gj">
                  <h5><i class="material-icons black-text">fiber_manual_record</i> Utilize a nossa tecnologia a seu favor para arrecadar variados itens em desuso. </h5>
                </span>
                <br>

                <span class="gj">
                  <h3>{{ substr ($product->title, 0,22) }}</h3>
                  @if (($product->price) != "0")

                  <span class="gj">R$ {{ number_format($product->price,2,',','.')}}</span>
                  @endif
                </span>
              </div>



            </div>
          </div>
        </div>
      </div>
      @endif
      @empty
      <p class="text-danger">Nenhum produto cadastrado na categoria!</p>
      @endforelse
      @empty
      <p class="text-danger">Nenhuma categoria cadastrada!</p>
      @endforelse



    </div>
  </div>
</div>