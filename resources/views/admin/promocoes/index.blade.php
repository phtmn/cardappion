@extends('layouts.admin.master')

@section('cabecalho')

<div class="header bg-dark pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <i class="ni ni-notification-70 text-white"></i>
                    <h3 class="h3 text-white d-inline-block mb-0">Promoções</h3>
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
                                <a href="{{route('promotions.create')}}" class="btn btn-success"> <i class=" fa fa-plus nav-icon"></i> Oferta </a>                                           
                            </div>
                            <div class="col-4 text-right">
                            </div>
                        </div>
                    </div>                    
                    <div class="card-body">
                        <div class="text-center">
                        <div class="card-header">
        <h4 class="card-title">Ofertas Cadastradas ( {{$data->count()}} )</h4>
    </div>
    <div class="card-body">
       <div class="table-responsive">
           <table class="table">
               <thead class="text-dark">
                    <th>#</th>
                    <th>Promoção </th>
                    <th>Valor (R$)</th>                                        
                    <th>Disponibilidade</th>
                    <th></th>
               </thead>
               <tbody>
                    @forelse($data as $d)
                        <tr>
                            <td><img src="{{Storage::url($d->image)}}" style="height: 70px;" alt=""/></td>
                            <td>{{$d->title}}</td>
                            <td>R$ {{  $d->promotion_value ?? 0 }}</td> 
                            <td>
                            <label class="custom-toggle">
                    <input type="checkbox">
                    <span class="custom-toggle-slider rounded-circle"></span>
                  </label>
                            </td>
                            <!-- <td><a href="{{ route('promo',$d->url)  }}" target="_blank">cardappon.com.br/promo/{{ $d->url }}</a></td> -->
                            <td>
                            <a href="" data-toogle="toltip" title="Editar promoção" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="" data-toogle="toltip" title="Apagar promoção" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></a>                                
                               
                            <!-- <a href="{{route('promotion.qrCode',$d->id)}}" class="btn btn-success btn-sm"><i class="fa fa-qrcode"></i></a> -->
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





<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">--}}
                    {{--<i class="now-ui-icons ui-1_simple-remove"></i>--}}
                {{--</button>--}}
                <h6 class="title title-up">Incluir Promoção</h6>
            </div>
            <form action="{{route('promotions.store')}}" method="POST">
                @csrf
            <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="description" class="form-control" placeholder="Nome da Promoção" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="promotion_value" class="form-control" placeholder="Valor promocional" required>
                    </div>

                    <div class="form-group">
                        <input type="date" name="start_date" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="date" name="end_date" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default">Incluir Promoção</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
            </form>
        </div>
    </div>
</div> -->

@stop