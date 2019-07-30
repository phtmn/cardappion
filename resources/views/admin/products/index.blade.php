@extends('layouts.admin.master')

@section('cabecalho')

<div class="header bg-dark pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <i class="ni ni-bullet-list-67 text-white"></i>
                    <h3 class="h3 text-white d-inline-block mb-0">Produtos</h3>
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
                                <a href="{{route('products.create')}}" class="btn btn-success"> <i class=" fa fa-plus nav-icon"></i> Produto </a>                                           
                            </div>
                            <div class="col-4 text-right">
                            </div>
                        </div>
                    </div>                    
                    <div class="card-body">
                        <div class="text-center">
                        <div class="card-header">
        <h4 class="card-title">Seus Produtos ( {{$data->count()}} )</h4>
    </div>
    <div class="card-body">
       <div class="table-responsive">
           <table class="table">
               <thead class="text-dark">                        
                        <th>#</th>
                        <th>Produto</th>
                        <th>Valor (R$)</th>
                        <th>Disponibilidade</th>
                        <th></th>
               </thead>
               <tbody>
                    @forelse($data as $d)
                        <tr>
                        <td><img src="{{Storage::url($d->image)}}" style="height: 70px;" alt=""/></td>
                            <td>{{$d->description}}</td>
                            <td>{{ $d->price}}</td>
                            <td>
                            <label class="custom-toggle">
                    <input type="checkbox">
                    <span class="custom-toggle-slider rounded-circle"></span>
                  </label>
                            </td>
                            <td>
                                <a href="" data-toogle="toltip" title="Editar produto" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="" data-toogle="toltip" title="Apagar produto" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></a>                                
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
