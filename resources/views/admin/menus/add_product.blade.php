@extends('layouts.admin.master')

@section('cabecalho')

<div class="header bg-black pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <!-- <i class="ni ni-collection text-white"></i>
                    <h3 class="h3 text-white d-inline-block mb-0">Menu <i class="ni ni-ungroup text-white"></i> {{$menu->description}}</h3></h3> -->
                    <h1 class="display-4 text-white d-inline-block mb-0">  <i class="ni ni-collection text-white"></i> Menu </h1> <i class="ni ni-ungroup text-white"></i> <i class="text-white"> {{$menu->description}} </i>
                </div>
                <div class="col-lg-6 col-5 text-right">
                <a class="text-white" href="{{route('menu.menuItens', [ 'menu_id' => $menu->id ])}} "><i class="ni ni-bold-left text-white"></i> Voltar </a>
              <!-- <a href="#" class="btn btn-sm btn-neutral"> Total de Categorias ({{$menu->count()}})</a> -->
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
              <h3 class="mb-0">Lista de Produtos para adicionar em {{$menu->description}} </h3>
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
            @forelse( $products as $d)
              <tr class="js-table-{{ $d->id }}">
              <td>
                  <img src="{{ url("{$d->image}") }}" style="height: 70px;" alt=""/>
                </td>
                <td>{{$d->title}}</td>
                <td>R$ {{ number_format($d->price,2,',','.') }}</td>

                <td class="text-left">
              <a class="btn btn-success btn-round btn-sm js-menu-action" style="color: white"
                data-route="{{ route('admin.menus.add_products', [ 'menu_id' => $menu->id, 'product_id' => $d->id ]) }}"
                data-id="{{ $d->id }}"
              > <i class="ni ni-fat-add"></i> Adicionar</a>
            </td>
              </tr>
            @empty
            <p class="text-danger">Nenhum produto cadastrado</p>

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

@stop
