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
            <form action="{{route('products.update', [ 'id' => $product->id ])}}" method="POST" enctype="multipart/form-data">
              @csrf
              {{ method_field('PUT') }}

              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Título
                  do produto </label>
                <div class="col-md-4">
                  <input type="text" name="title" class="form-control" value="{{ $product->title }}" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-right ">Foto de
                  destaque I</label>
                <div class="col-md-4">
                  <input type="file" name="image1" class="form-control img-thumbnail" data-default-file="{{ url("{$product->image1}") }}" />
                </div>
              </div>

              <div class="form-group row">
                <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-right ">Foto de
                  destaque II</label>
                <div class="col-md-4">
                  <input type="file" name="image2" class="form-control img-thumbnail" data-default-file="{{ url("{$product->image2}") }}" />
                </div>
              </div>

              <div class="form-group row">
                <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-right ">Foto de
                  destaque III</label>
                <div class="col-md-4">
                  <input type="file" name="image3" class="form-control img-thumbnail" data-default-file="{{ url("{$product->image3}") }}" />
                </div>
              </div>

              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Valor
                  (R$) </label>
                <div class="col-md-2">
                  <input type="text" name="price" class="form-control" id="price" value="{{ $product->price }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Informações adicionais </label>
                <div class="col-md-4">
                  <textarea name="details" rows="5" resize="none" class="form-control" maxlenght="500">{{ $product->details }}</textarea>
                </div>
              </div>

              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Valor nutricional </label>
                <div class="col-md-4">
                  <textarea name="nutritional_value" rows="4" resize="none" class="form-control" maxlenght="500" placeholder="No máximo 500 caracteres!">{{ $product->nutritional_value }}</textarea>
                </div>
              </div>

              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Origem do insumos </label>
                <div class="col-md-4">
                  <textarea name="origin_inputs" rows="4" resize="none" class="form-control" maxlenght="500" placeholder="No máximo 500 caracteres!">{{ $product->origin_inputs }}</textarea>
                </div>
              </div>

              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Sugestão de porção - Rendimento </label>
                <div class="col-md-4">
                  <textarea name="serving_suggestion" rows="4" resize="none" class="form-control" maxlenght="500" placeholder="No máximo 500 caracteres!">{{ $product->serving_suggestion }}</textarea>
                </div>
              </div>

              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Receita vinculada </label>
                <div class="col-md-4">
                  <textarea name="linked_revenue" rows="4" resize="none" class="form-control" maxlenght="500" placeholder="No máximo 500 caracteres!">{{ $product->linked_revenue }}</textarea>
                </div>
              </div>

              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Sugestão de serviço </label>
                <div class="col-md-4">
                  <textarea name="service_suggestion" rows="4" resize="none" class="form-control" maxlenght="500" placeholder="No máximo 500 caracteres!">{{ $product->service_suggestion }}</textarea>
                </div>
              </div>

              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Harmonização </label>
                <div class="col-md-4">
                  <textarea name="harmonization" rows="4" resize="none" class="form-control" maxlenght="500" placeholder="No máximo 500 caracteres!">{{ $product->harmonization }}</textarea>
                </div>
              </div>

              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Curiosidades </label>
                <div class="col-md-4">
                  <textarea name="curiosities" rows="4" resize="none" class="form-control" maxlenght="500" placeholder="No máximo 500 caracteres!">{{ $product->curiosities }}</textarea>
                </div>
              </div>

              <div class="form-group row">
                <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right"> </label>
                <div class="col-md-2">
                  <button type="submit" class="btn btn-block btn-outline-primary btn-lg btn-round"> <i class=" fa fa-check-square nav-icon"></i> Salvar</button>
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

  @section('js')
  <script>
    $(document).ready(function() {
      $("#price").mask('#.##0,00', {
        reverse: true
      });
    })
  </script>
  @stop