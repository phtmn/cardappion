@extends('layouts.admin.master')

@section('cabecalho')

<div class="header bg-white pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <!-- <i class="ni ni-bullet-list-67 text-white"></i>
                    <h3 class="h3 text-white d-inline-block mb-0">Produtos</h3> -->
          <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
            <i class="ni ni-bullet-list-67"></i>
          </div>
          <h3 class="display-5 text-dark d-inline-block mb-0"> Produtos</h3>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a class="text-dark" href="{{route('products.index')}} "><i class="ni ni-bold-left text-dark"></i> Voltar
          </a>
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
            <h3 class="mb-0">Editar Produto</h3>
          </div>
          <div class="card-body">
            <form action="{{route('products.update', [ 'id' => $product->id ])}}" method="POST"
              enctype="multipart/form-data">
              @csrf
              {{ method_field('PUT') }}
              <div class="form-group row">
                <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-right ">Foto de
                  destaque </label>
                <div class="col-md-4">
                  <input type="file" id="input-file-now" name="image" class="dropify img-thumbnail"
                    data-default-file="{{ url("{$product->image}") }}" />
                </div>
              </div>

              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Título
                  do produto </label>
                <div class="col-md-4">
                  <input type="text" name="title" class="form-control" value="{{ $product->title }}" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Valor
                  (R$) </label>
                <div class="col-md-2">
                  <!-- <input type="text" name="price" class="form-control" id=""> -->
                  <input type="text" name="price" class="form-control" id="price" value="{{ $product->price }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-search-input"
                  class="col-md-4 col-form-label form-control-label text-right">Informações adicionais </label>
                <div class="col-md-4">
                  <textarea name="details" rows="5" resize="none" class="form-control"
                    maxlenght="500">{{ $product->details }}</textarea>
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

  @include('tools.messages')

  @stop

  @section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('js/dropify/dist/css/dropify.css')}}">
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script> -->

  @stop

  @section('js')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script> -->
  <script src="{{asset('js/dropify/dist/js/dropify.js')}}"></script>
  <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
  <script src="{{ asset('js/viaCep.js') }}"></script>
  <script>
    $('#summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });

        $(document).ready(function(){

                $("#price").mask('#.##0,00', {reverse: true});


        })

        $(document).ready(function(){
            $('.dropify').dropify({
                messages:{
                    'default': 'upload da imagem do produto'
                }
            });
        });



  </script>


  @stop
