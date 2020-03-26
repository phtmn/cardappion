<section class="section">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12 ml-auto mr-auto">
        <section class="blogs-3">
          <div class="container">
            <div class="row">
              <div class="col-lg-10 col-md-8 mx-auto">
                <h2 class="title mb-5">{{ $tenant->name }}
                  <!-- <div class="meta"><a href="javascript:;"> Aberto ou fechado para pedidos </a></div> -->
                </h2>
                <div class="card card-blog card-plain blog-horizontal mb-5">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="card-image shadow">
                        <a href="javascript:;">
                          @if (isset($config->image))
                          <img class="img rounded" src="{{ url("$config->image") }}">
                          @endif
                        </a>
                      </div>
                      <a href="javascript:;"> {{ $config->site ?? '' }}</a>
                    </div>
                    <div class="col-lg-8">
                      <div class="card-body">
                        <h3 class="card-title">
                          <a href="javascript:;" class="btn btn-gradient-twitter btn-footer">
                            <i class="fab fa-telegram-plane"></i>
                          </a>
                          <a href="javascript:;" class="btn btn-gradient-slack btn-footer">
                            <i class="fab fa-whatsapp"></i>
                          </a>
                          <a href="javascript:;" class="btn btn-gradient-dribbble btn-footer ">
                            <i class="fab fa-instagram"></i>
                          </a>
                          <a href="javascript:;" class="btn btn-gradient-facebook btn-footer">
                            <i class="fab fa-facebook-f"></i>
                          </a>
                      </div>
                      </h3>
                      <p class="card-description">
                        {{ $config->details ?? '' }}
                      </p>
                      <div class="author">
                        <img src="{{ asset('img/endereco-fiscal-dtq.jpg') }} " alt="..." class="avatar img-raised">
                        <div class="text">
                          <span class="name">{{ $config->address ?? '' }}, {{ $config->neighborhood ?? '' }}</span>
                          <div class="meta">{{ $config->half_address ?? '' }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
</section>
</div>
</div>
</div>
</section>