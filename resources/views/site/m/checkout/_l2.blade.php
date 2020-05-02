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
                                <a class="btn btn-sm btn-neutral text-primary">{{ $total_qty }}</a>
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
                                <a class="btn btn-sm btn-neutral text-primary">R$ {{ $subtotal }}</a>
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
                                <a class="btn btn-sm btn-neutral text-primary">R$ {{ number_format($delivery, 2, ',', '.') }}</a>
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