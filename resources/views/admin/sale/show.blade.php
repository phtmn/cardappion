@extends('admin.layouts.master')

<style>
    .js-status {
        cursor: pointer;
    }
</style>

@section('cabecalho')
<div class="header bg-white pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                        <i class="ni ni-cart"></i>
                    </div>
                    <h3 class="display-5 text-dark d-inline-block mb-0"> Vendas</h3>
                </div>
                <div class="col-lg-6 col-5 text-right">
                <a class="text-dark" href="{{route('sale.index')}} "><i class="ni ni-bold-left text-dark"></i> Voltar </a>
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
        <h3 class="mb-0">Lista de Pedidos</h3>
      </div>
          <div class="card-body">
            <div class="text-center">

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="text-dark">
                        <th>Nº</th>
                        <!-- <th>Data</th> -->
                        <th>Comprador</th>
                        <th>Whatsapp</th>
                        <th>Endereço</th>
                        <th>Pagamento</th>
                        <th>Total</th>
                        <th>Entrega</th>
                        <th>Troco</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                       
                            <tr>
                                <td>{{ $sale->invoice_number }}</td>
                             {{--   <td>{{ $sale->created_at }}</td> --}}
                                <td>{{ $sale->name }}</td>
                                <td>{{ $sale->whatsapp_masked }}
                                    
                                </td>
                                <td>{{ $sale->address }}</td>
                                <td>
                                    {{ $sale->payment_name }}
                                </td>
                                <td>R$ {{ $sale->total_masked }}</td>
                                <td>R$ {{ $sale->delivery_masked }}</td>
                                <td>R$ {{ $sale->change_masked }}</td>
                                <td>
                                    @if($sale->status == 1)
                                        <!-- <i class="bg-warning"></i> -->
                                        <span class="badge badge-primary js-status" data-toggle="modal" data-target="modalStatus" data-uuid="{{ $sale->uuid }}">{{ $sale->status_name }}</span>
                                    @elseif($sale->status == 2)
                                        <span class="badge badge-success js-status" data-toggle="modal" data-target="modalStatus" data-uuid="{{ $sale->uuid }}">{{ $sale->status_name }}</span>
                                    @elseif($sale->status == 3)
                                        <span class="badge badge-danger js-status" data-toggle="modal" data-target="modalStatus" data-uuid="{{ $sale->uuid }}">{{ $sale->status_name }}</span>
                                    @endif
                                </td>
                            </tr>
                      
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
</div>


<div id="modalStatus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Atualizar Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formStatus">
                    <input type="hidden" id="uuid" name="uuid">
                    <div class="form-group col-md-12 js-validate">
                        <label for="status" class="col-form-label">Novo Status</label>
                        <select class="form-control" data-trigger name="status">
                            <option>Selecione...</option>
                            <option value="2">Fechado</option>
                            <option value="3">Cancelado</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                <button type="button" class="btn btn-danger js-change-status">Atualizar</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>

        const status = document.querySelectorAll('.js-status')
        if(status) {
            status.forEach(function(el, i) {
                el.addEventListener('click', function(event) {
                    document.querySelector('#uuid').value = event.target.dataset.uuid
                    $('#modalStatus').modal()
                })
            })
        }


        const change_status = document.querySelector('.js-change-status');
        if(change_status) {
            change_status.addEventListener('click', (event) => {
                var object = {};
                var form = document.querySelector('#formStatus');
                var uuid = document.querySelector('#uuid').value

                formData = new FormData(form)
                formData.forEach((value, key) => {object[key] = value});
                var data = object;

                axios({ method: 'put', baseURL: `/sale/${uuid}`, data: data })
                .then(function (response) {
                    location.reload()
                })
                .catch(function (error) {
                    swal("Oops!", "Aconteceu algum problema", "error");
                });
            })
        }

</script>

@stop