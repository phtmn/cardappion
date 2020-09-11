@extends('admin.layouts.master')

<style>
    .js-status {
        cursor: pointer;
    }
</style>

@section('cabecalho')
<div class="header bg-white pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                        <i class="ni ni-cart"></i>
                    </div>
                    <h3 class="display-5 text-dark d-inline-block mb-0"> Vendas</h3>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a class="text-dark" href="{{route('sale.index')}} "><i class="ni ni-bold-left text-dark"></i> Voltar </a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('conteudo')


<div class="container-fluid mt--6">
    <div class="row">

        <div class="col-lg-4">
            <div class="card-wrapper">

                <div class="card">

                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Pedido <a class="btn btn-sm btn-neutral text-primary">{{ $sale->invoice_number }} </a></h3>

                            </div>
                            <div class="col-4 text-right">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush list my--3">
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col ml--2">
                                        <h4 class="mb-0">
                                            <a>Data</a>
                                        </h4>
                                    </div>
                                    <div class="col-auto">
                                        {{ $sale->created_at->format('d/m/Y H:i:s')}}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col ml--2">
                                        <h4 class="mb-0">
                                            <a>Cliente</a>
                                        </h4>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-sm btn-neutral text-primary " type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                            . {{ substr ($sale->name, 0,15) }} .
                                        </button>
                                    </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col ml--2">
                                        <h4 class="mb-0">
                                            <a>Pagamento</a>
                                        </h4>
                                    </div>
                                    <div class="col-auto">
                                        {{ $sale->payment_name }}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col ml--2">
                                        <h4 class="mb-0">
                                            <a>Total</a>
                                        </h4>
                                    </div>
                                    <div class="col-auto">
                                        <a class="btn btn-sm btn-secondary text-warning">R$ {{ $sale->total_masked }}</a>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col ml--2">
                                        <h4 class="mb-0">
                                            <a>Entrega</a>
                                        </h4>
                                    </div>
                                    <div class="col-auto">
                                        <a class="btn btn-sm btn-secondary text-warning">R$ {{ $sale->delivery_masked }}</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col ml--2">
                                        <h4 class="mb-0">
                                            <a>Troco pra</a>
                                        </h4>
                                    </div>
                                    <div class="col-auto">
                                        <a class="btn btn-sm btn-secondary text-warning">R$ {{ number_format($sale->change,2,',','.') }}</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col ml--2">
                                        <h4 class="mb-0">
                                            <a>Status</a>
                                        </h4>
                                    </div>
                                    <div class="col-auto">
                                        @if($sale->status == 1)

                                        <!-- <i class="bg-warning"></i> -->
                                        <span class="badge badge-warning badge-lg ">{{ $sale->status_name }}</span>
                                        @elseif($sale->status == 2)
                                        <span class="badge badge-success badge-lg  ">{{ $sale->status_name }}</span>
                                        @elseif($sale->status == 3)
                                        <span class="badge badge-danger badge-lg ">{{ $sale->status_name }}</span>
                                        @endif
                                    </div>
                                </div>
                            </li>

                        </ul>


                    </div>
                </div>
            </div>
        </div>



        <div class="col-lg-8">
            <div class="card-wrapper">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Detalhes do Cliente <a class="btn btn-sm btn-neutral text-primary"> . {{ substr ($sale->name, 0,15) }} . </a></h3>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-dark">
                                    <th>Contato</th>
                                    <th>CEP</th>
                                    <th>Endereço</th>
                                </thead>
                                <tbody>
                               
                                    <tr>
                               
                                        <td>
                                        <h4 class="mb-0">
                                        @if($sale->whatsapp ?? '')


                <a target="_blank" href="https://api.whatsapp.com/send?phone=55{{$sale->whatsapp}}" class="avatar rounded-circle">
                  <img alt="Image placeholder" src="{{asset('/vendor/argon/assets/img/brand/zap.png')}}">
                </a>
             
                {{$sale->whatsapp ?? ''}} 
                @endif

                @if($sale->telegram ?? '')  
                <a target="_blank" href="https://t.me/{{$sale->telegram}}" class="avatar rounded-circle">
                  <img alt="Image placeholder" src="{{asset('/vendor/argon/assets/img/brand/telegram.png')}}">
                </a>
                {{$sale->telegram ?? ''}} 
                @endif

                                    
                                            </h4>
                                        </td>
                                        <td>{{ $sale->zipcode}}</td>
                                        <td>
                                            <h4 class="mb-0">
                                                <a> {{$sale->address ?? ''}} {{$sale->num ?? ''}}</a>
                                                <p> {{$sale->neighborhood ?? ''}} </p>
                                            </h4>
                                            <small>{{$sale->city ?? ''}} </small>

                                        </td>

                                    </tr>
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Detalhes do Pedido <a class="btn btn-sm btn-neutral text-primary">{{ $sale->invoice_number }} </a></h3>
                    </div>

                    <div class="card-body">
                       
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-dark">
                                    <th>#</th>
                                    <th>Produto</th>
                                    <th>Valor (R$)</th>
                                    <th>Quantidade</th>
                                </thead>
                                <tbody>
                                    @forelse ($itens as $item)
                                    <tr>
                                        <td>
                                            <div class="avatar-group">

                                                @if(!$item->product->image1)
                                                <a class="avatar ">
                                                    <img src="{{asset('/vendor/argon/assets/img/brand/no_foto.png')}}" width="45" height="45">
                                                </a>
                                                @else
                                                <a class="avatar ">
                                                    <img src="{{ Storage::url($item->product->image1) }}" width="45" height="45">
                                                </a>
                                                @endif

                                                @if(!$item->product->image2)
                                                <a class="avatar ">
                                                    <img src="{{asset('/vendor/argon/assets/img/brand/no_foto.png')}}" width="45" height="45">
                                                </a>
                                                @else
                                                <a class="avatar ">
                                                    <img src="{{ Storage::url($item->product->image2) }}" width="45" height="45">
                                                </a>
                                                @endif

                                                @if(!$item->product->image3)
                                                <a class="avatar ">
                                                    <img src="{{asset('/vendor/argon/assets/img/brand/no_foto.png')}}" width="45" height="45">
                                                </a>
                                                @else
                                                <a class="avatar ">
                                                    <img src="{{ Storage::url($item->product->image3) }}" width="45" height="45">
                                                </a>
                                                @endif
                                            </div>


                                        </td>
                                        <td>{{ $item->product->title }}</td>
                                        <td>{{ number_format($item->product->price,2,',','.') }}</td>
                                        <td>{{ $item->quantity }}</td>

                                    </tr>
                                    @empty
                                    <p class="text-danger">Nenhum PEDIDO cadastrado!</p>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <h2> Observações </h2>
                    <small class="text-warning">{{$sale->obs ?? ''}} </small>

                    </div>
                </div>

            </div>
        </div>



        @stop