@extends('layouts.admin.master')

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
          <h3 class="display-5 text-dark d-inline-block mb-0"> Menu </h3>
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

    <div class="col-lg-4">
      <div class="card-wrapper">
        <form action="{{route('menus.update', [ 'id' => $menu->id ])}}" method="POST">
          @csrf
          {{ method_field('PUT') }}
          <div class="card">

            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Editar Categoria</h3>
                  <!-- <a href="#!" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Em breve!"><i
                            class=" ni ni-cloud-upload-96"></i> Upload Logo</a> -->
                </div>
                <div class="col-4 text-right">
                </div>
              </div>
            </div>
            <div class="card-body">

              <div class="row">
                <div class="form-group col-md-12">
                  <label for="">Nome da categoria</label>
                  <input type="text" value="{{ $menu->description }}" name="description" class="form-control" required>
                </div>

                <div class="form-group col-md-12">
                  <label for="active">Publicado</label>
                  <select name="active" id="" class="form-control">
                    <option value="1" {{ $menu->active == 1 ? 'selected' : '' }}>Sim</option>
                    <option value="0" {{ $menu->active == 0 ? 'selected' : '' }}>Não</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                  <button type="submit" class="btn btn-block btn-outline-primary btn-lg btn-round "> <i
                      class=" fa fa-check-square nav-icon"></i> Salvar</button>
                </div>
                <div class="col-md-4">

                </div>

              </div>
        </form>
      </div>
    </div>
  </div>
</div>



@stop
