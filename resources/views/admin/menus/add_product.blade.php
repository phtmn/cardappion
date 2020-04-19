@extends('admin.layouts.master')

@section('cabecalho')

<div class="header bg-white pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
             
                    <div class="icon icon-shape bg-gradient-warning  rounded-circle text-white">
                                    <i class="ni ni-collection"></i>
                                </div>
                    <h3 class="display-5 text-dark d-inline-block mb-0"> Menu </h3> <i class="ni ni-ungroup text-dark"></i> <i class="text-dark"> {{$menu->description}} </i>
                </div>
                <div class="col-lg-6 col-5 text-right">
                <a class="text-dark" href="{{route('menu.menuItens', [ 'menu_id' => $menu->id ])}} "><i class="ni ni-bold-left text-dark"></i> Voltar </a>
             
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
                          <div class="avatar-group">

                            @if(!$d->image1)
                            <a class="avatar ">
                              <img src="{{asset('/vendor/argon/assets/img/brand/no_foto.png')}}" width="45" height="45">
                        </a>
                        @else
                        <a class="avatar ">
                          <img src="{{ Storage::url($d->image1) }}" width="45" height="45">
                        </a>
                        @endif

                        @if(!$d->image2)
                        <a class="avatar ">
                          <img src="{{asset('/vendor/argon/assets/img/brand/no_foto.png')}}" width="45" height="45">
                        </a>
                        @else
                        <a class="avatar ">
                          <img src="{{ Storage::url($d->image2) }}" width="45" height="45">
                        </a>
                        @endif

                        @if(!$d->image3)
                        <a class="avatar ">
                          <img src="{{asset('/vendor/argon/assets/img/brand/no_foto.png')}}" width="45" height="45">
                        </a>
                        @else
                        <a class="avatar ">
                          <img src="{{ Storage::url($d->image3) }}" width="45" height="45">
                        </a>
                        @endif
                </div>
                </td>
                <td>{{$d->title}}</td>
                <td>R$ {{ number_format($d->price,2,',','.') }}</td>

                <td class="text-left">
              <a class="btn btn-primary btn-round btn-sm js-menu-action" style="color: white"
                data-route="{{ route('admin.menus.add_products', [ 'menu_id' => $menu->id, 'product_id' => $d->id ]) }}"
                data-id="{{ $d->id }}"
              > <i class="ni ni-fat-add"></i> Adicionar</a>
            </td>
              </tr>
            @empty
            <p class="text-danger">Nenhum produto cadastrado!</p>

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
