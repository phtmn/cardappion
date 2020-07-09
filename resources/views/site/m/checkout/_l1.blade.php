<div class="col-lg-4">
    <div class="card-wrapper">
        <div class=" ">

            @foreach ($items as $item)
            <!-- Card body -->
            <div class="card-body item-checkout"  data-id="{{ $item->id }}" data-quantity="{{ $item->quantity }}">
                <div class="row">

                    <div class="col-auto">
                        @if(!$item->conditions->image1)
                        <a class="avatar">
                            <img alt="" src="{{asset('/vendor/argon/assets/img/brand/no_foto.png')}}">
                        </a>
                    </div>
                    @else
                    <a class="avatar">
                        <img alt="" src="{{ Storage::url("{$item->conditions->image1}") }}">
                    </a>
                </div>
                @endif
                <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Quantidade</h5>
                    <span class="h2 font-weight-bold mb-0">
                        <button class="btn btn-outline-warning btn-round btn-sm quantity" data-id="{{ $item->id }}" data-qty="{{ $item->quantity }}" data-op="delete"> <i class="ni ni-fat-delete"></i> </button>
                        <button class="btn btn-outline-warning btn-round btn-sm quantity" data-id="{{ $item->id }}" data-qty="{{ $item->quantity }}" data-op="add"> <i class="ni ni-fat-add"></i> </button>
                        {{ $item->quantity }}

                    </span>
                </div>

            </div>
            <p class="mt-2 mb-0 text-sm">
                <span class="text-warning mr-2"><i class="ni ni-bullet-list-67"></i> {{ $item->name }}</span>
            </p>
            <p class="mt-1 mb-0 text-sm">
                <span class="text-primary mr-2"> {{ $item->conditions->price_masked }}</span>
                <span class="text-nowrap">Valor Unitário</span>
            </p>
            <p class="mt-1 mb-0 text-sm">
                <span class="text-primary mr-2"> R$ {{ number_format($item->price * $item->quantity, 2, ',', '.') }} </span>
                <span class="text-nowrap">Valor Total</span>
            </p>
            <p class="mt-2 mb-0 text-sm">
                <button type="button" rel="tooltip" data-placement="left" title="Remove item" data-id="{{ $item->id }}" class="btn btn-sm btn-icon btn-warning removeItem">
                    Retirar Pedido 
                </button>
            </p>
        </div>

        @endforeach


    </div>
</div>



