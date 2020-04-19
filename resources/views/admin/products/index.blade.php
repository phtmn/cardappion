@extends('admin.layouts.master')

@section('cabecalho')

<div class="header bg-white pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
            <i class="ni ni-bullet-list-67"></i>
          </div>
          <h3 class="display-5 text-dark d-inline-block mb-0"> Produtos</h3>
        </div>
        <div class="col-lg-6 col-5 text-right">
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
            <div class="row align-items-center">
              <div class="col-8">
                <a href="{{route('products.create')}}" class="btn btn-gradiente-default"> <i class=" fa fa-plus nav-icon"></i>
                  Adicionar Produto </a>
              </div>
              <div class="col-4 text-right">
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="text-center">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table align-items-center table-flush " style="width:100%" >
                    <thead class="text-dark">
                      <th>#</th>
                      <th>Produto</th>
                      <th>Valor (R$)</th>
                      <th class="text-left">Publicado</th>
                      <th></th>
                    </thead>
                    <tbody>
                      @forelse($data as $d)
                      <tr>
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
                <td>R$ {{ number_format($d->price,2,',','.') }} </td>
                <td>
                  <label class="custom-toggle">
                    <input type="checkbox" class="js-checkbox" data-id="{{ $d->id }}" data-route="{{ route('admin.products.activate', [ 'id' => $d->id ]) }}" {{ ($d->active) ? 'checked' : '' }}>
                    <span class="custom-toggle-slider rounded-circle" data-label-off="Não" data-label-on="Sim"></span>
                  </label>
                </td>
                <td>
                  <form action="{{ route('products.destroy', ['id' => $d->id]) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('products.edit', ['id' => $d->id]) }}" class="btn btn-primary btn-sm"> <i class="ni ni-curved-next text-white"></i> Editar
                    </a>
                    <button type="submit" class="btn btn-primary btn-sm text-white"><i class="far fa-trash-alt"></i> Apagar</button>
                  </form>
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
</div>
@stop