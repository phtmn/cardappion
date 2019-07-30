@extends('layouts.admin.master')

@section('cabecalho')

<div class="header bg-dark pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <i class="ni ni-settings-gear-65 text-white"></i>
                    <h3 class="h3 text-white d-inline-block mb-0">Configurações</h3>
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
        <div class="col-lg-4">
            <div class="card-wrapper">                
                <div class="card">                
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">                
                                <a href="#!" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Em breve!"><i
                                    class=" ni ni-cloud-upload-96"></i> Upload Logo</a>
                            </div>
                            <div class="col-4 text-right">
                            </div>
                        </div>
                    </div>                    
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="h3">
                                Olá, {{ auth()->user()->name }}<span class="font-weight-light"></span>
                            </h5>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>{{ auth()->user()->email }}
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
                        <h3 class="mb-0">Dados do Estabelecimento</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('config.store')}}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-md-4 col-form-label form-control-label text-right text-danger">Nome <b
                                        class="text-danger" data-toggle="tooltip" data-placement="right"
                                        title="Campo obrigatório"> * </b></label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control" value="">
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <label for="example-search-input"
                                    class="col-md-4 col-form-label form-control-label text-right">Nº do Documento <b
                                        class="text-danger" data-toggle="tooltip" data-placement="right"
                                        title="Campo obrigatório"> * </b></label>
                                <div class="col-md-4">
                                    <input type="text" name="docnumber" class="form-control"
                                        value="" id="docnumber">
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <label for="example-search-input"
                                    class="col-md-4 col-form-label form-control-label text-right text-danger">CEP <b
                                        class="text-danger" data-toggle="tooltip" data-placement="right"
                                        title="Campo obrigatório"> * </b></label>
                                <div class="col-md-3">
                                    <input type="text" name="zipcode" class="form-control" value="" id="cep" maxlength="8">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input"
                                    class="col-md-4 col-form-label form-control-label text-right">Endereço </label>
                                <div class="col-md-6">
                                    <input type="text" name="address" class="form-control" value="" id="address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input"
                                    class="col-md-4 col-form-label form-control-label text-right">Bairro </label>
                                <div class="col-md-4">
                                    <input type="text" name="neighborhood" class="form-control"
                                        value="" id="neighborhood">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input"
                                    class="col-md-4 col-form-label form-control-label text-right">Cidade </label>
                                <div class="col-md-6">
                                    <input type="text" name="city" class="form-control" value="" id="city">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input"
                                    class="col-md-4 col-form-label form-control-label text-right">Estado </label>
                                <div class="col-md-2">
                                    <input type="text" name="us" class="form-control" value="" id="us">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input"
                                    class="col-md-4 col-form-label form-control-label text-right">Telefone </label>
                                <div class="col-md-4">
                                    <input type="text" name="telephone" class="form-control"
                                        value="" id="telephone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input"
                                    class="col-md-4 col-form-label form-control-label text-right">WhatsApp </label>
                                <div class="col-md-4">
                                    <input type="text" name="whatsapp" class="form-control"
                                        value="" id="whatsapp">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input"
                                    class="col-md-4 col-form-label form-control-label text-right">Site </label>
                                <div class="col-md-7">
                                    <input type="text" name="site" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input"
                                    class="col-md-4 col-form-label form-control-label text-right">Instagram </label>
                                <div class="col-md-7">
                                    <input type="text" name="instagram" class="form-control"
                                        value="" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input"
                                    class="col-md-4 col-form-label form-control-label text-right">Fanpage </label>
                                <div class="col-md-7">
                                    <input type="text" name="fanpage" class="form-control" value="">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-4">
                                    
                                </div>
                                <div class="col-md-4">
                                <button type="submit" class="btn btn-block btn-outline-success btn-lg btn-round"> <i
                                    class=" fa fa-check-square nav-icon"></i> Salvar</button>
                                </div>
                                <div class="col-md-4">
                                    
                                </div>
                            
                            </div>



                            

                            @include('tools.messages')

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @stop


    
 