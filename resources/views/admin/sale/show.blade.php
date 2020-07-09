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
    <div class="col-lg-12">
      <div class="card-wrapper">
        <div class="card">
        <div class="card-header">
        <h3 class="mb-0">Lista de Pedidos</h3>
      </div>
          <div class="card-body">
            <div class="text-center">

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="text-dark">
                       
                        <th>ID</th>
                        <th>Sale_id</th>
                        <th>PRECO</th>
                        <th>Quantidade</th>
                        <th>Produto</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                    @forelse ($itens as $iten)
                            <tr>
                            
                               <td>{{ $iten->id }}</td>
                               <td>{{ $iten->sale_id }}</td>
                               <td>{{ $iten->price }}</td>
                               <td>{{ $iten->quantity }}</td>
                               <td>{{ $iten->product_id }}</td>
                               @forelse ($products as $p)

                            
                               <td>{{ $p->id }}</td>
                               <td>{{ $p->title }}</td>
                               @empty
                                        <p class="text-danger">Nenhum ITEM cadastrado!</p>
                                        @endforelse
                             
                            </tr>
                            @empty
                                        <p class="text-danger">Nenhum ITEM cadastrado!</p>
                                        @endforelse
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






@stop
