@extends('layouts.admin.master')

@section('cabecalho')

<div class="header bg-dark pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <i class="ni ni-collection text-white"></i>
                    <h3 class="h3 text-white d-inline-block mb-0">Menu - Add NOVO Menu</h3>
                    
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
        <form action="{{route('menus.store')}}" method="POST">
            @csrf

        <div class="card-body">
            <div class="form-group">
                    <label for="" class="text-primary">Nome do Cardápio</label>
                    <input type="text" name="description" class="form-control">
            </div>

            <div class="form-group">
                <label for="" class="text-primary">Url para compatilhamento do menu</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">https://cardappon.com.br/menu/</span>
                    </div>
                    <input type="text" class="form-control" name="url" id="basic-url" aria-describedby="basic-addon3">
                </div>
            </div>

            <div class="form-group">
                <label for="active">Disponivel</label>
                <select name="active" id="" class="form-control">
                    <option value="1" selected>Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-round">Salvar</button>
        </div>
        </form>
    </div>
    </div>
    </div>
    </div>
  

@stop