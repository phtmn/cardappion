<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="mtoken" content="{{ $token }}">

    <link rel="icon" href="{{ asset('vendor/argon/assets/img/brand/logo3.png') }}" type="image/png">
    <title>
        {{ config('app.name') }}
    </title>

    <!-- <meta name="keywords" content="argon design system pro, design system, login, form, table, tables, calendar, card, cards, navbar, modal, icons, icons, map, chat, carousel, menu, datepicker, gallery, slider, date, sidebar, social, dropdown, search, tab, nav, footer, date picker, forms, tabs, time, button, select, input, timeline, cart, car, fullcalendar, about us, invoice, account, chat, log in, blog, profile, portfolio, landing page, ecommerce, shop, landing, register, app, contact, one page, sign up, signup, store, bootstrap 4, bootstrap4">
  <meta name="description" content="Start your development with a Premium Argon Design System for Bootstrap 4. It combines colors that are easy on the eye, spacious cards, beautiful typography, and graphics. It is a beautiful cross-platform UI kit featuring over 1100 components, 43 sections and 17 example pages."> -->

    <link rel="stylesheet" href="{{ asset('assets/css/stilo.css') }}" type="text/css">
    <link rel="icon" href="{{ asset('vendor/argon/assets/img/brand/logo3.png') }}" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/argon.min.css?v=1.0.0') }}" type="text/css">


    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/lavalamp/js/jquery.lavalamp.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>
    <script src="{{ asset('assets/js/argon.min.js?v=1.0.0') }}"></script>
    <script src="{{ asset('assets/js/demo.min.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
    <script src="{{ asset('js/argon-design-system.min.js?v=1.0.2') }}" type="text/javascript"></script> <!-- botão -->
    <!-- <script src="{{ asset('js/jquery.sharrre.js') }}"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script> -->


    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/viaCep.js')}}"> </script>
    <script src="{{asset('js/jquery.mask.min.js')}}"> </script>

    <script>
        $(document).ready(function() {           
            $("#cep").mask('00.000-000');
            $('#telegram').mask('(99) 99999-9999');
        })

    </script>

    <script>
    function limpa_formulário_cep() {
      // Limpa valores do formulário de cep.
      $("#address").val("");
      $("#neighborhood").val("");
      $("#city").val("");
      $("#us").val("");
    }

    //Quando o campo cep perde o foco.
    $("#cep").blur(function() {

      //Nova variável "cep" somente com dígitos.
      var cep = $(this).val().replace(/\D/g, '');

      //Verifica se campo cep possui valor informado.
      if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if (validacep.test(cep)) {

          //Preenche os campos com "..." enquanto consulta webservice.
          $("#address").val("...");
          $("#neighborhood").val("...");
          $("#city").val("...");
          $("#state").val("...");

          //Consulta o webservice viacep.com.br/
          $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

            if (!("erro" in dados)) {
              //Atualiza os campos com os valores da consulta.
              $("#address").val(dados.logradouro);
              $("#neighborhood").val(dados.bairro);
              $("#city").val(dados.localidade);
              $("#us").val(dados.uf);
            } //end if.
            else {
              //CEP pesquisado não foi encontrado.
              limpa_formulário_cep();
              alert("CEP não encontrado.");
            }
          });
        } //end if.
        else {
          //cep é inválido.
          limpa_formulário_cep();
          alert("Formato de CEP inválido.");
        }
      } //end if.
      else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
      }
    });
  </script>

</head>


<body class="bg-gradient-default">
    @include('site.layouts._nav')

    <div class="main-content bg-white">
        <div class="header bg-white pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-2 col-7">
                            <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                <i class="ni ni-cart"></i>

                            </div>

                        </div>
                        <div class="col-lg-10 col-5 text-right">
                            <h4 class="display-5 text-dark d-inline-block mb-0"> Pedidos</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card-wrapper">
                        <div class="card ">

                            @foreach ($items as $item)
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-auto">
                                        @if(!$item->conditions->image1)
                                        <a class="avatar">
                                            <img alt="" src="{{asset('/vendor/argon/assets/img/brand/no_foto.png')}}">
                                        </a>
                                    </div>
                                    @else
                                    <a class="avatar">
                                        <img alt="" src="{{ Storage::url("{$item->conditions->image1}") }}">
                                    </a>
                                </div>
                                @endif
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Quantidade</h5>
                                    <span class="h2 font-weight-bold mb-0">
                                        <button class="btn btn-outline-warning btn-round btn-sm quantity" data-id="{{ $item->id }}" data-qty="{{ $item->quantity }}" data-op="delete"> <i class="ni ni-fat-delete"></i> </button>
                                        <button class="btn btn-outline-warning btn-round btn-sm quantity" data-id="{{ $item->id }}" data-qty="{{ $item->quantity }}" data-op="add"> <i class="ni ni-fat-add"></i> </button>
                                        {{ $item->quantity }}

                                    </span>
                                </div>

                            </div>
                            <p class="mt-2 mb-0 text-sm">
                                <span class="text-warning mr-2"><i class="ni ni-bullet-list-67"></i> {{ $item->name }}</span>
                            </p>
                            <p class="mt-1 mb-0 text-sm">
                                <span class="text-primary mr-2"> {{ $item->conditions->price_masked }}</span>
                                <span class="text-nowrap">Valor Unitário</span>
                            </p>
                            <p class="mt-1 mb-0 text-sm">
                                <span class="text-primary mr-2"> R$ {{ number_format($item->price * $item->quantity, 2, ',', '.') }} </span>
                                <span class="text-nowrap">Valor Total</span>
                            </p>
                            <p class="mt-2 mb-0 text-sm">
                                <button type="button" rel="tooltip" data-placement="left" title="Remove item" data-id="{{ $item->id }}" class="btn btn-sm btn-icon btn-warning removeItem">
                                    Retirar do Pedido <i class="ni ni-cart"></i>
                                </button>
                            </p>
                        </div>

                        @endforeach


                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card-wrapper">
                    <div class="card ">
                        <div class="card-body">
                            <ul class="list-group list-group-flush list my--3">
                                <li class="list-group-item px-0">
                                    <div class="row align-items-center">
                                        <div class="col ml--2">
                                            <h4 class="mb-0">
                                                <a>Itens</a>
                                            </h4>
                                        </div>
                                        <div class="col-auto">
                                            <a class="btn btn-sm btn-secondary">{{ $total_qty }}</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0">
                                    <div class="row align-items-center">
                                        <div class="col ml--2">
                                            <h4 class="mb-0">
                                                <a>Subtotal</a>
                                            </h4>
                                        </div>
                                        <div class="col-auto">
                                            <a class="btn btn-sm btn-secondary">R$ {{ $subtotal }}</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0">
                                    <div class="row align-items-center">
                                        <div class="col ml--2">
                                            <h4 class="mb-0">
                                                <a>Taxa de Entrega</a>
                                            </h4>
                                        </div>
                                        <div class="col-auto">
                                            <a class="btn btn-sm btn-secondary">R$ {{ number_format($delivery, 2, ',', '.') }}</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0">
                                    <div class="row align-items-center">
                                        <div class="col ml--2">
                                            <h4 class="mb-0">
                                                <a>Valor Final</a>
                                            </h4>
                                        </div>
                                        <div class="col-auto">
                                            <a class="btn btn-sm btn-secondary text-warning">R$ {{ $total }}</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 ">

                <div class="accordion text-white" id="accordionExample">
                    <div class="card">
                        <div class="card-header bg-warning" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h5 class="mb-0 text-white">Solicitar Pedido</h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <form id="formSale">

                                <small for="name" class="col-form-label text-dark p-2" style="text-indent: 25px;">Meu nome é</small>
                                <div class="col-md-12">
                                    <input type="text" name="name" class="form-control" placeholder="Seu nome">
                                </div>

                                <small for="name" class="col-form-label text-dark p-2" style="text-indent: 25px;">Meu contato é</small>
                                <div class="col-md-12">
                                    <input type="text" name="whatsapp" class="form-control" placeholder="WhatsApp" id="whatsapp">                                    
                                </div>
                                <div class="col-md-12 mt-1">
                                    <input type="text" name="telegram" class="form-control" placeholder="Telegram" id="telegram">                                    
                                </div>

                                <small for="name" class="col-form-label text-dark p-2" style="text-indent: 25px;">O pedido será entregue em</small>
                                <div class="col-md-12 mt-1">
                                    <input type="text" name="zipcode" class="form-control" id="cep" placeholder="CEP">
                                </div>
                                <div class="col-md-12 mt-1">
                                    <input type="text" name="address" class="form-control" id="address" placeholder="Endereço">
                                </div>
                                <div class="col-md-12 mt-1">
                                    <input type="text" name="neighborhood" class="form-control" id="neighborhood" placeholder="Bairro">
                                </div>
                                <div class="col-md-12 mt-1">
                                    <input type="text" name="city" class="form-control" id="city" placeholder="Cidade">
                                </div>
                                <div class="col-md-12 mt-1">
                                    <input type="text" name="num" class="form-control" placeholder="Nº">
                                </div>
                                <small for="name" class="col-form-label text-dark p-2" style="text-indent: 25px;">Desejo pagar</small>
                                <div class="col-md-12 ">
                                <select class="form-control checkout-payment" data-trigger name="payment" id="payment" required>
                                            <option value="1">Cartão de Crédito</option>
                                            <option value="2">Cartão de Débito</option>
                                            <option value="3">Dinheiro</option>
                                        </select>
                                </div>
                                
                                <div style="display: none" id="checkout-change" class="col-md-12 mt-1">                                
                                <input type="text" class="form-control" id="change" placeholder="Desejo troco pra R$  ">
                                </div>
                                <small for="name" class="col-form-label text-dark p-2" style="text-indent: 25px;">Observações</small>
                                <div class="col-md-12 ">
                                <textarea name="obs" rows="3" resize="none" class="form-control" maxlenght="500"></textarea>    
                                </div>
                                <div class="col-md-12 mt-1 mb-2">
                                <button type="button" class="btn btn-warning formSale " >Enviar Pedido</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


        </div>


    </div>
    </div>
    </div>

    <button class="btn btn-warning ml-3" data-toggle="modal" data-target="#finished">Solicitar Pedido </button>

    <section class="py-6 bg-gradient-default ">

    </section>





    <!-- Modal -->
    <div class="modal fade" id="finished" tabindex="-1" role="dialog" aria-labelledby="finishedTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Cadastrar Pedido</h5>
                </div>
                <div class="modal-body">
                    <form id="formSale">
                        <div class="row">
                            <div class="form-group col-md-6 js-validate">
                                <label for="name" class="col-form-label">Nome:</label>
                                <input type="text" class="form-control" id="name" required>

                            </div>
                            <div class="form-group col-md-6 js-validate">
                                <label for="whatsapp" class="col-form-label">Whatsapp:</label>
                                <input type="text" class="form-control" id="whatsapp" required>

                            </div>
                            <div class="form-group col-md-12 js-validate">
                                <label for="address" class="col-form-label">Endereço:</label>
                                <textarea class="form-control" id="address" rows="3" required></textarea>

                            </div>
                            <div class="form-group col-md-6 js-validate">
                                <label for="payment" class="col-form-label">Tipo de Pagamento:</label>
                                <select class="form-control checkout-payment" data-trigger name="payment" id="payment" required>
                                    <option value="1">Cartão de Crédito</option>
                                    <option value="2">Cartão de Débito</option>
                                    <option value="3">Dinheiro</option>
                                </select>

                            </div>
                            <div id="checkout-change" class="form-group col-md-6" style="display: none">
                                <label for="change" class="col-form-label">Troco para:</label>
                                <input type="text" class="form-control" id="change">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button> -->
                    <button type="button" class="btn btn-warning formSale">Enviar Pedido</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <section class="py-6 bg-gradient-default ">

    </section>



    @include('site.m._footer')

</body>

</html>