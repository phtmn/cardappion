@extends('layouts.admin.master')

@section('cabecalho')

<div class="header bg-dark pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <i class="ni ni-collection text-white"></i>
                    <h3 class="h3 text-white d-inline-block mb-0">Menu</h3>
                </div>
                <div class="col-lg-6 col-5 text-right">

              <a href="#" class="btn btn-sm btn-neutral"> Total de Categorias ({{$data->count()}})</a>
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
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <!-- <a href="#!" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Em breve!"><i
                                    class=" ni ni-cloud-upload-96"></i> Upload Logo</a> -->
                            </div>
                            <div class="col-4 text-right">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="h3">
                                Olá, <div class="row align-items-center">
                            <div class="col-8">
                            <a href="{{ route('menus.create') }}" class="btn btn-success"> <i class=" fa fa-plus nav-icon"></i> Adicionar Categoria </a>   <input type="text" name="active" value="" placehonder="nome da Categoria">
                            </div>
                            <div class="col-4 text-right">
                            </div>
                        </div><span class="font-weight-light"></span>
                            </h5>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>
                            </div>
                        </div>
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
               <!-- <th>#</th> -->
                        <th>Categoria</th>
                        <!-- <th>Produtos</th> -->
                        <th>Publicado</th>
                        <th class="text-right"></th>
               </thead>
               <tbody>
                    @forelse($data as $d)
                        <tr>
                        <!-- <td>{{$d->id}}</td> -->
                            <td><a href="#" target="_blank">{{$d->description}}</a> </td>
                            <!-- <td>{{ 0 }}</td> -->
                            <td>

                                <label class="custom-toggle">
                                  <input type="checkbox" class="js-checkbox"
                                    data-id="{{ $d->id }}"
                                    data-route="{{ route('admin.menus.activate', [ 'id' => $d->id ]) }}"
                                    {{ ($d->active) ? 'checked' : '' }}>
                                  <span class="custom-toggle-slider rounded-circle" data-label-off="Não" data-label-on="Sim"></span>
                                </label>


                            <!-- {{$d->active ? 'Sim' : 'Não'}} -->

                            </td>

                            <td class="text-right">
                              <a href="{{ route('site.menu.show', [ 'token' => $d->token ]) }}" class="btn btn-primary btn-round btn-sm"> Visualizar</a>
                              <a href="{{route('menu.menuItens',$d->id)}}" class="btn btn-primary btn-round btn-sm"><i class=" fa fa-plus nav-icon"></i> Adicionar Produtos</a>
                              <!-- <a href="{{route('menu.menuItens',$d->id)}}" class="btn btn-primary btn-round">Visualizar Produtos</a> -->
                              <!-- <a href="{{route('menu.share',$d->id)}}" class="btn btn-success btn-round" data-toggle="tooltip" title="proximas versoes">Compartilhar</a> -->
                            </td>

                        </tr>
                    @empty
                        <p class="text-danger">Nenhuma categoria cadastrada</p>
                    @endforelse
               </tbody>
           </table>
       </div>
    </div>
                </div>
            </div>
        </div>

    </div>













@stop
