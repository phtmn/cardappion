@extends('layouts.admin.master')

@section('cabecalho')

<div class="header bg-white pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <!-- <i class="ni ni-notification-70 text-white"></i>
                    <h3 class="h3 text-white d-inline-block mb-0">Promoções </h3> -->
          <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
            <i class="ni ni-notification-70"></i>
          </div>
          <h3 class="display-5 text-dark d-inline-block mb-0"> Promoções </h3>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a class="text-dark" href="{{route('promotions.index')}} "><i class="ni ni-bold-left text-dark"></i> Voltar
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@stop
@include('tools.messages')
@section('conteudo')

<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-lg-12">
      <div class="card-wrapper">
        <div class="card">
          <div class="card-header">
            <h3 class="mb-0">Editar Promoção</h3>
          </div>
          <div class="card-body">
            <form action="{{route('promotions.update', [ 'id' => $promotion->id ])}}" method="POST"
              enctype="multipart/form-data">
              @csrf
              {{ method_field('PUT') }}
              <div class="form-group row">
                <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-right ">Foto de
                  destaque </label>
                <div class="col-md-4">
                  <input type="file" id="input-file-now" name="image" class="dropify img-thumbnail"
                    data-default-file="{{ url("{$promotion->image}") }}" />
                </div>
              </div>

              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Título
                  da promoção </label>
                <div class="col-md-4">
                  <input type="text" name="title" class="form-control" value="{{ $promotion->title }}" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Valor
                  (R$) </label>
                <div class="col-md-2">
                  <input type="text" name="promotion_value" class="form-control" id="promotion_value"
                    value="{{ $promotion->promotion_value }}">
                  <!-- <input type="text" name="promotion_value" class="form-control" id=""> -->
                </div>
              </div>

              <div class="form-group row">
                <label for="example-search-input"
                  class="col-md-4 col-form-label form-control-label text-right">Informações adicionais </label>
                <div class="col-md-4">
                  <textarea name="details" rows="5" resize="none" class="form-control"
                    maxlenght="500">{{ $promotion->details }}</textarea>
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                  <button type="submit" class="btn btn-block btn-outline-primary btn-lg btn-round"> <i
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

  @section('css')
  <link rel="stylesheet" href="{{asset('js/dropify/dist/css/dropify.css')}}">

  @stop

  @section('js')
  <script src="{{asset('js/dropify/dist/js/dropify.js')}}"></script>
  <script>
    $(document).ready(function(){
            $('.dropify').dropify({
                messages:{
                    'default': 'upload da imagem da promoção'
                }
            });
        });



        $(document).ready(function(){

            // $("#promotion_value").mask('#,##0.00', {reverse: true});
            $("#promotion_value").mask('#.##0,00', {reverse: true});

        });
  </script>

  @stop