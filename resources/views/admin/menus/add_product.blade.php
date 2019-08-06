@extends('layouts.admin.master')

@section('cabecalho')

<div class="header bg-dark pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6"></div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('menu.menuItens', [ 'menu_id' => $menu->id ]) }}">Voltar</a></li>
                <li class="breadcrumb-item active">Adicionar Produto</li>
              </ol>
            </div>
          </div>
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
              <h3 class="mb-0">Lista de Produtos para Adicionar</h3>{{$menu->description}}
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                <th>Codigo</th>
                <th>Nome</th>
                <th>Valor(R$)</th>
                <th>Foto</th>
                <th class="text-right"></th>
                </thead>
                <tbody>
                @forelse( $products as $d)
                  <tr class="js-table-{{ $d->id }}">
                    <td>{{$d->id}}</td>
                    <td>{{$d->title}}</td>
                    <td>{{$d->price }}</td>
                    <td>
                      <img src="{{ url("{$d->image}") }}" style="height: 70px;" alt=""/>
                    </td>
                    <td class="text-right">
                      <a class="btn btn-primary btn-round btn-sm js-menu-action" style="color: white"
                        data-route="{{ route('admin.menus.add_products', [ 'menu_id' => $menu->id, 'product_id' => $d->id ]) }}"
                        data-id="{{ $d->id }}"
                      >Adicionar</a>
                    </td>
                  </tr>
                @empty
                    <p>Nenhum item no menu</p>

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
