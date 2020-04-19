<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="mtoken" content="{{ $token }}">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
      {{ config('app.name') }}
  </title>

  <meta name="keywords" content="argon design system pro, design system, login, form, table, tables, calendar, card, cards, navbar, modal, icons, icons, map, chat, carousel, menu, datepicker, gallery, slider, date, sidebar, social, dropdown, search, tab, nav, footer, date picker, forms, tabs, time, button, select, input, timeline, cart, car, fullcalendar, about us, invoice, account, chat, log in, blog, profile, portfolio, landing page, ecommerce, shop, landing, register, app, contact, one page, sign up, signup, store, bootstrap 4, bootstrap4">
  <meta name="description" content="Start your development with a Premium Argon Design System for Bootstrap 4. It combines colors that are easy on the eye, spacious cards, beautiful typography, and graphics. It is a beautiful cross-platform UI kit featuring over 1100 components, 43 sections and 17 example pages.">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="{{ asset('css/all.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
  <link href="{{ asset('css//nucleo-svg.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/argon-design-system.min.css?v=1.0.2') }}" rel="stylesheet" />

  <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{ asset('js/bootstrap-switch.js') }}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('js/nouislider.min.js') }}" type="text/javascript"></script>
  <!--  Plugin for the Carousel, full documentation here: http://jedrzejchalubek.com/ -->
  <script src="{{ asset('js/glide.js') }}" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://flatpickr.js.org/ -->
  <script src="{{ asset('js/moment.min.js') }}"></script>
  <!--	Plugin for Select, full documentation here: https://joshuajohnson.co.uk/Choices/ -->
  <script src="{{ asset('js/choices.min.js') }}" type="text/javascript"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://flatpickr.js.org/ -->
  <script src="{{ asset('js/datetimepicker.js') }}" type="text/javascript"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>
  <!-- Plugin for Headrom, full documentation here: https://wicky.nillia.ms/headroom.js/ -->
  <script src="{{ asset('js/headroom.min.js') }}"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="{{ asset('js/argon-design-system.min.js?v=1.0.2') }}" type="text/javascript"></script> <!-- Sharrre libray -->
  <script src="{{ asset('js/jquery.sharrre.js') }}"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>



  {{-- <script>
    // Carousel
    new Glide('.glide', {
      type: 'carousel',
      startAt: 0,
      focusAt: 2,
      perTouch: 1,
      perView: 4
    }).mount();


    // Testimonial Carousel
    new Glide('.testimonial-glide', {
      type: 'carousel',
      startAt: 0,
      focusAt: 2,
      perTouch: 1,
      perView: 4
    }).mount();

    ArgonKit.initGoogleMaps();
    ArgonKit.initGoogleMaps2();
  </script> --}}
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>

</head>

<body class="blog-posts">
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
            <button class="btn btn-warning ml-3" data-toggle="modal" data-target="#finished">Finalizar Compra </button>

        </div>

    </section>

    <!-- Modal -->
    <div class="modal fade" id="finished" tabindex="-1" role="dialog" aria-labelledby="finishedTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Cadastro de Entrega</h5>
                    </div>
                    <div class="modal-body">
                        <form id="formSale">
                            <div class="row">
                                <div class="form-group col-md-6 js-validate">
                                    <label for="name" class="col-form-label">Nome:</label>
                                    <input type="text" class="form-control" id="name" required>
                                    <span class="-error">* Campo Obrigatório</span>
                                </div>
                                <div class="form-group col-md-6 js-validate">
                                    <label for="whatsapp" class="col-form-label">Whatsapp:</label>
                                    <input type="text" class="form-control" id="whatsapp" required>
                                    <span class="-error">* Campo Obrigatório</span>
                                </div>
                                <div class="form-group col-md-12 js-validate">
                                    <label for="address" class="col-form-label">Endereço:</label>
                                    <textarea class="form-control" id="address" rows="3" required></textarea>
                                    <span class="-error">* Campo Obrigatório</span>
                                </div>
                                <div class="form-group col-md-6 js-validate">
                                    <label for="payment" class="col-form-label">Tipo de Pagamento:</label>
                                    <select class="form-control checkout-payment" data-trigger name="payment" id="payment" required>
                                        <option value="1">Cartão de Crédito</option>
                                        <option value="2">Cartão de Débito</option>
                                        <option value="3">Dinheiro</option>
                                    </select>
                                    <span class="-error">* Campo Obrigatório</span>
                                </div>
                                <div id="checkout-change" class="form-group col-md-6" style="display: none">
                                    <label for="change" class="col-form-label">Troco para:</label>
                                    <input type="text" class="form-control" id="change">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-warning formSale">Finalizar Pedido</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('site.m._footer')
