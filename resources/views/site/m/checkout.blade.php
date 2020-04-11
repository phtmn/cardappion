{{-- @extends('site.layouts.master') --}}

@extends('site.layouts.master_design')

@section('content')

<body class="blog-posts">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent headroom">
        <div class="container">
        <a class="navbar-brand mr-lg-5" href="../../../index.html">
            <img src="{{asset('vendor/argon/assets/img/brand/logo4.png')}}">
        </a>
        <div class="navbar-collapse collapse" id="navbar_global">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                    </div>
                </div>
            </div>
            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item">
                    <a href="{{ route('cart.checkout', ['token' => $token]) }}" class="btn btn-warning ml-3">Sacola <i class="ni ni-cart"></i></a href="{{ route('cart.checkout', ['token' => $token]) }}">
                </li>
            </ul>
        </div>
        </div>
    </nav>

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
                                    <div class="img-container">
                                        <img src="{{ url("{$item->conditions->image}") }}" alt="{{ $item->name }}">
                                    </div>
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
@stop
