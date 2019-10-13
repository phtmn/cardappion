@extends('layouts.admin.master')

@section('cabecalho')

<div class="header bg-white pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <!-- <i class="ni ni-collection text-white"></i>
                    <h3 class="h3 text-white d-inline-block mb-0">Menu <i class="ni ni-ungroup text-white"></i> {{$menu->description}}</h3> -->
                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                    <i class="ni ni-collection"></i>
                                </div>
                    <h3 class="display-5 text-dark d-inline-block mb-0">  Menu </h3> <i class="ni ni-ungroup text-white"></i> <i class="text-white"> {{$menu->description}} </i>
                </div>
                <div class="col-lg-6 col-5 text-right">
                <a class="text-dark" href="{{route('menus.index')}} "><i class="ni ni-bold-left text-dark"></i> Voltar </a>
              <!-- <a href="#" class="btn btn-sm btn-neutral"> Total de Categorias ({{$menu->count()}})</a> -->
            </div>
            </div>
        </div>
    </div>
</div>

        

@stop

@section('conteudo')
    @include('tools.messages')


    <div class="container-fluid mt--6">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-wrapper">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                            <a href="{{ route('admin.menus.products', [ 'id' => $menu->id ]) }}" class="btn btn-dark"> <i class=" fa fa-plus nav-icon"> </i> Adicionar produto na categoria</a>
                                <!-- <a href="{{route('products.create')}}" class="btn btn-success"> <i class=" fa fa-plus nav-icon"></i> Adicionar Produto </a> -->
                            </div>
                            <div class="col-4 text-right">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center">

    <div class="card-body">
       <div class="table-responsive">
       <table class="table">
                    <thead class="">
                    <th>#</th>
                    <th>Produto</th>
                    <th>Valor (R$)</th>
                    
                    <th class="text-right"></th>
                    </thead>
                    <tbody>
                    @forelse( $menu->products as $d)
                      <tr class="js-table-{{ $d->id }}">
                      <td>
                          <img src="{{ url("{$d->image}") }}" style="height: 70px;" alt=""/>
                        </td>
                        <td>{{$d->title}}</td>
                        <td>R$ {{ number_format($d->price,2,',','.') }}</td>
                       
                        <td class="text-left">
                          <a class="btn btn-danger btn-round btn-sm js-menu-action" style="color: white"
                            data-route="{{ route('admin.menus.remove_products', [ 'menu_id' => $menu->id, 'product_id' => $d->id ]) }}"
                            data-id="{{ $d->id }}"
                          > <i class="ni ni-fat-remove"></i> Remover </a>
                        </td>
                      </tr>
                    @empty
                    <p class="text-danger">Nenhum produto adicionado na categoria {{$menu->description}}</p>

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



    
@stop
