<!-- @extends('layouts.admin.master')

@section('cabecalho')

<div class="header bg-white pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">

          <!-- <h3 class="h3 text-white d-inline-block mb-0">Produtos</h3> -->
          <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
            <i class="ni ni-bullet-list-67"></i>
          </div>
          <h3 class="display-5 text-dark d-inline-block mb-0"> Produtos</h3>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <!-- <a href="#" class="btn btn-sm btn-neutral"> Total de Produtos  ( {{$data->count()}} )</a> -->
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
                <a href="{{route('products.create')}}" class="btn btn-dark"> <i class=" fa fa-plus nav-icon"></i>
                  Adicionar Produto </a>
              </div>
              <div class="col-4 text-right">
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="text-center">

              <div class="card-body">
                <div class="table-responsive">
                  <table  class="table align-items-center table-flush "  style="width:100%" id="example">
                    <thead class="text-dark">
                      <th>#</th>
                      <th>Produto</th>
                      <th>Valor (R$)</th>
                      <th class="text-left">Publicado</th>
                      <th></th>
                    </thead>
                    <tbody>
                      @forelse($data as $d)
                      <tr>
                        <td>
                        <div class="avatar-group">
                        <a class="avatar avatar-sm rounded-circle">
                          <img src="{{ url("{$d->image}") }}" style="height: 50px;" alt="" />
                        </a>
                        <!-- <a class="avatar avatar-sm rounded-circle">
                          <img src="{{ url("{$d->image}") }}" style="height: 50px;" alt="" />
                        </a>
                        <a class="avatar avatar-sm rounded-circle">
                          <img src="{{ url("{$d->image}") }}" style="height: 50px;" alt="" />
                        </a>
                        <a class="avatar avatar-sm rounded-circle">
                          <img src="{{ url("{$d->image}") }}" style="height: 50px;" alt="" />
                        </a> -->
                        </div>
                        </td>
                        <td>{{$d->title}}</td>
                        <td>R$ {{ number_format($d->price,2,',','.') }} </td>
                        <td>
                          <label class="custom-toggle">
                            <input type="checkbox" class="js-checkbox" data-id="{{ $d->id }}"
                              data-route="{{ route('admin.products.activate', [ 'id' => $d->id ]) }}"
                              {{ ($d->active) ? 'checked' : '' }}>
                            <span class="custom-toggle-slider rounded-circle" data-label-off="Não"
                              data-label-on="Sim"></span>
                          </label>
                        </td>
                        <td>
                        
                            <form action="{{ route('products.destroy', ['id' => $d->id]) }}"
                                                        method="post">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <a href="{{ route('products.edit', ['id' => $d->id]) }}" class="btn btn-primary btn-sm"> <i class="ni ni-curved-next text-white"></i> Editar
                          </a>                                                        
                                                        <button type="submit" class="btn btn-sm btn-secondary text-warning"><i
                                                                class="ni ni-fat-remove text-warning"></i> Apagar</button>
                                                    </form>
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

  @section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('js/dropify/dist/css/dropify.css')}}">
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script> -->
   
  <link type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
  <link type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" rel="stylesheet">

  @stop


  @section('js')
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script> -->
  <script src="{{asset('js/dropify/dist/js/dropify.js')}}"></script>
  <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
  <script src="{{ asset('js/viaCep.js') }}"></script>
  

    <script>
    $(document).ready(function() {
      $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
          'excelHtml5',
          'csvHtml5',
          'pdfHtml5'
        ]
      });
    });
  </script>

  