@extends('layouts.admin.master')

@section('cabecalho')

<div class="header bg-black pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                   
                    <!-- <h3 class="h3 text-white d-inline-block mb-0">Produtos</h3> -->
                    <h1 class="display-4 text-white d-inline-block mb-0">  <i class="ni ni-bullet-list-67 text-white"></i> Produtos</h1>
                </div>
                <div class="col-lg-6 col-5 text-right">
                <a href="#" class="btn btn-sm btn-neutral"> Total de Produtos  ( {{$data->count()}} )</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 
<div class="header pb-4 d-flex align-items-center" style="min-height: 350px; background-size: cover; background-position: center top;">
<span class="mask bg-gradient-dark"></span>
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    
                    <h1 class="display-2 text-white d-inline-block mb-0">  <i class="ni ni-bullet-list-67 text-white"></i> Produtos</h1>
                </div>
                <div class="col-lg-6 col-5 text-right">
                <a href="#" class="btn btn-sm btn-neutral"> Total de Produtos  ( {{$data->count()}} )</a>
                </div>
            </div>
        </div>
    </div>
</div> -->


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
                                <a href="{{route('products.create')}}" class="btn btn-success"> <i class=" fa fa-plus nav-icon"></i> Adicionar Produto </a>
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
               <thead class="text-dark">
                        <th>#</th>
                        <th>Produto</th>
                        <th>Valor (R$)</th>
                        <th class="text-left">Publicado</th>
                        <th ></th>
               </thead>
               <tbody>
                    @forelse($data as $d)
                        <tr>
                        <td>
                          <img src="{{ url("{$d->image}") }}" style="height: 70px;" alt=""/>
                        </td>
                        <td>{{$d->title}}</td>
                        <td>R$ {{ number_format($d->price,2,',','.') }} </td>
                        <td >
                          <label class="custom-toggle">
                            <input type="checkbox" class="js-checkbox"
                              data-id="{{ $d->id }}"
                              data-route="{{ route('admin.products.activate', [ 'id' => $d->id ]) }}"
                              {{ ($d->active) ? 'checked' : '' }}>
                            <span class="custom-toggle-slider rounded-circle" data-label-off="Não" data-label-on="Sim"></span>
                          </label>
                        </td>
                        <td>
                            <!-- <a href="" data-toogle="toltip" title="Editar produto" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="" data-toogle="toltip" title="Apagar produto" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></a>                                 -->
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


    </div>




@stop
