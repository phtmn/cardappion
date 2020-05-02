<div class="col-lg-4 ">

    <div class="accordion text-white" id="accordionExample">
        <div class="card">
            <div class="card-header bg-warning" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h5 class="mb-0 text-white">Solicitar Pedido</h5>
            </div>
            <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                <form id="formSale">

                    <small for="name" class="col-form-label text-dark p-2" style="text-indent: 25px;">Meu nome é</small>
                    <div class="col-md-12">
                        <input type="text" name="name" class="form-control" placeholder="Seu nome" id="name" required>
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
                        <input type="text" name="zipcode" class="form-control" id="zipcode" placeholder="CEP">
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
                        <input type="text" name="num" id="num" class="form-control" placeholder="Nº">
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
                        <textarea name="obs" rows="3" resize="none" id="obs" class="form-control" maxlenght="500"></textarea>
                    </div>
                    <div class="col-md-12 mt-1 mb-2">
                        <button type="button" class="btn btn-sm btn-warning formSale ">Enviar Pedido</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>