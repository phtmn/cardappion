@extends('layouts.admin.master')

@section('cabecalho')

<div class="header bg-dark pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <i class="ni ni-collection text-white"></i>
                    <h3 class="h3 text-white d-inline-block mb-0">Menus</h3>
                </div>
                <div class="col-lg-6 col-5 text-right">
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
                            <a href="{{ route('menus.create') }}" class="btn btn-outline-primary"> Novo Menu +</a>
                            </div>
                            <div class="col-4 text-right">
                            </div>
                        </div>
                    </div>                    
                    <div class="card-body">
                        <div class="text-center">
                        <div class="card-header">
        <h4 class="card-title">Seus Menus ({{$data->count()}})</h4>
    </div>
    <div class="card-body">
       <div class="table-responsive">
           <table class="table">
               <thead class="text-dark">
               <th>Codigo</th>
                        <th>Nome</th>
                        <th>Itens</th>
                        <th>Disponivel</th>
                        <th class="text-right"></th>
               </thead>
               <tbody>
                    @forelse($data as $d)
                        <tr>
                        <td>{{$d->id}}</td>
                            <td>{{$d->description}}</td>
                            <td>{{ 0 }}</td>
                            <td>{{$d->active ? 'Sim' : 'Não'}}</td>

                            <td class="text-right">
                                <a href="{{route('menu.menuItens',$d->id)}}" class="btn btn-primary btn-round">Ver Itens</a>
                                <a href="{{route('menu.share',$d->id)}}" class="btn btn-success btn-round" data-toggle="tooltip" title="proximas versoes">Compartilhar</a>

                            </td>
                            
                        </tr>
                    @empty
                        <p class="text-danger">Nenhuma promoção cadastrada</p>
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