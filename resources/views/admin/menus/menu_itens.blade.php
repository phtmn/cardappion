@extends('layouts.admin.master')

@section('cabecalho')

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a href="{{ route('admin.menus.products', [ 'id' => $menu->id ]) }}" class="btn btn-outline-primary"> Adicionar Item a esse Cardápio</a>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('menus.index')}}">Voltar para Menus</a></li>
                            <li class="breadcrumb-item active">Cadastrar Produto</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

@stop

@section('conteudo')
    @include('tools.messages')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Você está vendo o cardápio: {{$menu->description}}</h4>
{{--            <a href="{{route('menus.create')}}" class="btn btn-danger btn-round"> Novo Menu</a>--}}
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
                    @forelse( $menu->products as $d)
                      <tr class="js-table-{{ $d->id }}">
                        <td>{{$d->id}}</td>
                        <td>{{$d->title}}</td>
                        <td>{{$d->price }}</td>
                        <td>
                          <img src="{{ url("{$d->image}") }}" style="height: 70px;" alt=""/>
                        </td>
                        <td class="text-right">
                          <a class="btn btn-danger btn-round btn-sm js-menu-action" style="color: white"
                            data-route="{{ route('admin.menus.remove_products', [ 'menu_id' => $menu->id, 'product_id' => $d->id ]) }}"
                            data-id="{{ $d->id }}"
                          >Remover</a>
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
@stop
