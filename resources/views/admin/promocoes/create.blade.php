@extends('layouts.admin.master')

@section('cabecalho')

<div class="header bg-dark pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <i class="ni ni-notification-70 text-white"></i>
                    <h3 class="h3 text-white d-inline-block mb-0">Promoções - Add NOVA PROMOçÃo</h3>
                    
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
                        <h4 class="card-title">Cadastrar Oferta</h4>
                    </div>

                    <div class="card-body">
                    <form action="{{route('promotions.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="img">
                            <label class="text-primary"> Foto de Destaque</label>
                            <input type="file" id="input-file-now" name="image" class="dropify img-thumbnail" />
                        </div>

                        <div class="form-group">
                            <label for="" class="text-primary">Titulo da oferta</label>
                            <input type="text" name="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="" class="text-primary">Link para compartilhar a oferta</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">https://cardappon.com.br/promo/</span>
                                </div>
                                <input type="text" value="premium members only"class="form-control" name="url" id="basic-url" aria-describedby="basic-addon3" disabled>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="" class="text-primary">Valor da oferta</label>
                                <input type="text" name="promotion_value" class="form-control">
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label class="text-primary">Quando a oferta acaba?</label>
                                <input type="date" class="form-control" name="expiration_date">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="details" class="text-primary">Detalhes da Promoção</label>
                            <textarea name="details" id="" cols="20" rows="5" class="form-control"></textarea>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-round">Salvar</button>
                    </div>
                </form>
            </div></div>
        <div class="col-md-4 preview"></div>
    </div>
    </div>

   


@stop

@section('css')
    <link rel="stylesheet" href="{{asset('js/dropify/dist/css/dropify.css')}}">

@stop

@section('js')
    <script src="{{asset('js/dropify/dist/js/dropify.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('.dropify').dropify({
                messages:{
                    'default': 'Clique para enviar a foto da sua oferta'
                }
            });
        });
    </script>

@stop
