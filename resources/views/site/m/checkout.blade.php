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

</head>


<body class="bg-gradient-default">
@include('site.layouts._nav')

    <section class="section">

        <div class="container">

            <div class="table-responsive">
                <table class="table table-shopping">
                    <thead>
                        <tr>
                            <th class="text-center"></th>
                            <th>Produto</th>
                            <th class="text-right">Preço</th>
                            <th class="text-right">Quantidade</th>
                            <th class="text-right">Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($items as $item)
                            <tr class="item-checkout" data-id="{{ $item->id }}" data-quantity="{{ $item->quantity }}">
                                <td>
                                    {{--<div class="img-container">
                                        <img src="{{ url("{$item->conditions->image}") }}" alt="{{ $item->name }}">
                                    </div>--}}
                                </td>
                                <td class="td-name">
                                    <span>{{ $item->name }}</span>
                                </td>
                                <td class="td-number">
                                    {{ $item->conditions->price_masked }}
                                </td>
                                <td class="td-number">
                                    {{ $item->quantity }}
                                    <div class="btn-group">
                                        <button class="btn btn-info btn-sm quantity" data-id="{{ $item->id }}" data-qty="{{ $item->quantity }}" data-op="delete"> <i class="ni ni-fat-delete"></i> </button>
                                        <button class="btn btn-info btn-sm quantity" data-id="{{ $item->id }}" data-qty="{{ $item->quantity }}" data-op="add"> <i class="ni ni-fat-add"></i> </button>
                                    </div>
                                </td>
                                <td class="td-number">
                                    R$ <span>{{ number_format($item->price * $item->quantity, 2, ',', '.') }}</span>
                                </td>
                                <td class="td-actions">
                                    <button type="button" rel="tooltip" data-placement="left" title="Remove item" data-id="{{ $item->id }}" class="btn btn-sm btn-icon btn-warning removeItem">
                                        <i class="ni ni-fat-remove"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>

        </div>

        <div class="container">
            <h3>
                <small class="text-muted">Items</small>
                {{ $total_qty }}
            </h3>
            <h3>
                <small class="text-muted">Subtotal</small>
                R$ {{ $subtotal }}
            </h3>
            <h3>
                <small class="text-muted">Entrega</small>
                R$ {{ number_format($delivery, 2, ',', '.') }}
            </h3>
            <h3>
                <small class="text-muted">Total</small>
                R$ {{ $total }}
            </h3>
            <button class="btn btn-warning ml-3" data-toggle="modal" data-target="#finished">Solicitar Pedido </button>

        </div>

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

