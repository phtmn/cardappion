@extends('admin.layouts.master')

@section('cabecalho')

<div class="header bg-white pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <!-- <i class="ni ni-collection text-white"></i>
                    <h3 class="h3 text-white d-inline-block mb-0">Menu</h3> -->
          <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
            <i class="ni ni-collection"></i>
          </div>
          <h3 class="display-5 text-dark d-inline-block mb-0"> Menu</h3>
        </div>
        <div class="col-lg-6 col-5 text-right">

          <!-- <a href="#" class="btn btn-sm btn-neutral"> Total de Categorias ({{$data->count()}})</a> -->
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

    <div class="col-lg-4">
      <div class="card-wrapper">
        <form action="{{route('menus.store')}}" method="POST">
          @csrf
          <div class="card">

            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Adicionar Categoria</h3>
                  <!-- <a href="#!" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Em breve!"><i
                            class=" ni ni-cloud-upload-96"></i> Upload Logo</a> -->
                </div>
                <div class="col-4 text-right">
                </div>
              </div>
            </div>
            <div class="card-body">
              @include('admin.menus.partials._form')


              <div class="form-group row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                  <button type="submit" class="btn btn-block btn-outline-primary btn-lg btn-round "> <i class=" fa fa-check-square nav-icon"></i> Salvar</button>
                </div>
                <div class="col-md-4">

                </div>

              </div>

              <!-- <div class="card-footer">
                  <button type="submit" class="btn btn-round btn-outline-success"><i class=" fa fa-check-square nav-icon"></i> Salvar</button>
                </div> -->
        </form>
      </div>
    </div>
  </div>
</div>



<div class="col-lg-8">
  <div class="card-wrapper">
    <div class="card">
      <div class="card-header">
        <h3 class="mb-0">Categorias do Menu</h3>
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class="text-dark">
              <th>=</th>
              <th>Categoria</th>
              <!-- <th>Produtos</th> -->
              <th>Publicado</th>
              <th class="text-right"></th>
            </thead>
            <tbody id="category-drag">
              @forelse($data as $d)
              <tr class="js-sort" data-id="{{ $d->uuid }}" style="cursor: grab">
                <td>= </td>
                <td>{{$d->description}}</a> </td>
                <!-- <td>{{ 0 }}</td> -->
                <td>
                  <label class="custom-toggle">
                    <input type="checkbox" class="js-checkbox" data-id="{{ $d->id }}" data-route="{{ route('admin.menus.activate', [ 'id' => $d->id ]) }}" {{ ($d->active) ? 'checked' : '' }}>
                    <span class="custom-toggle-slider rounded-circle" data-label-off="Não" data-label-on="Sim"></span>
                  </label>
                  <!-- {{$d->active ? 'Sim' : 'Não'}} -->

                </td>

                <td class="text-left">
                  <form action="{{ route('menus.destroy', ['id' => $d->id]) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{route('menu.menuItens',$d->id)}}" class="btn btn-outline-primary btn-sm btn-round"><i class="ni ni-ui-04 y"></i> Vincular </a>
                    <a href="{{ route('menus.edit', ['id' => $d->id]) }}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Editar"> <i class="ni ni-curved-next text-white"></i> Editar
                    </a>
                    <button type="submit" class="btn btn-primary btn-sm text-white"><i class="far fa-trash-alt"></i> Apagar</button>
                  </form>

                </td>

              </tr>
              @empty
              <p class="text-danger">Nenhuma categoria cadastrada!</p>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>



@stop
