

  <div class="main-content">
    <!-- Header -->
    <div class="header bg-white pt-5 pb-7">
      <div class="container">
        <div class="header-body">
          <div class="row align-items-center">
          <div class="col-lg-1">
              
              </div>
            <div class="col-lg-10">
              <div class="pr-5">
                <h1 class="display-1 text-dark font-weight-bold mb-0">Soluções em Cardápios Digitais </h1>
                <h2 class="display-4 text-dark font-weight-light">Todos os cardápios e promoções em um único lugar.</h2>
                
                <div class="mt-5">
                <!-- <p class="lead text-white">
            Temos uma plataforma perfeita para o seu negócio, seja ele do tamanho que for.
            </p> -->
                </div>
              </div>
            </div>
            <div class="col-lg-1">
              
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-secondary" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div> -->
    </div>
    <!-- <section class="py-6 pb-5 bg-secondary">
      <div class="row justify-content-center text-center">
        <div class="col-md-6">
          <h2 class="display-3 text-azul2">Fazer parte da nossa plataforma é muito simples</h3>
            <p class="lead text-white">
            Temos uma plataforma perfeita para o seu negócio, seja ele do tamanho que for.
            </p>
        </div>
      </div>
    
    </section> -->
    <section class="section section-lg pt-lg-0 mt--7 bg-warning">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0 bg-warning">
                  <div class="card-body py-5">
                    
                    <h4 class="h3 text-white text-center text-uppercase">Cadastre seu negócio</h4>
                    
                  
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-6 bg-dark">
                  <div class="card-body py-5">
                    
                    <h4 class="h3 text-white text-center text-uppercase">Crie seu cardápio</h4>
                  
                  
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0 bg-lilas">
                  <div class="card-body py-5">
                    
                    <h4 class="h3 text-warning text-center text-uppercase">Compartilhe seu cardápio</h4>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      </div>
    </section>
    
    <section class="py-6 bg-white">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-md-6">
            <img src="{{asset('vendor/argon/assets/img/theme/landing-2.png')}}" class="img-fluid">
          </div>
          <div class="col-md-6">
            <div class="pr-md-5">
            <div class="alert alert-warning" role="alert">
              <span class="alert-icon"><i class="ni ni-building"></i></span>
              <span class="alert-text"><strong>CADASTRE</strong> seu negócio</span>
          </div>
              <!-- <h1> CADASTRE SEU NEGÓCIO</h1> -->
              <p>Nosso objetivo é melhorar seu negócio com soluções baseadas em cardápios digitais.

              
              </p>
              <a href="{{route('register')}}" class="font-weight-bold text-warning mt-5">Cadastre-se</a>
            </div>
          </div>
        </div>
      </div>
    </section> 
    <section class="py-6 bg-black">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-md-6 order-md-2">
            <img src="{{asset('vendor/argon/assets/img/theme/landing-3.png')}}" class="img-fluid">
          </div>
          <div class="col-md-6 order-md-1">
            <div class="pr-md-5 text-white">
            <div class="alert alert-white" role="alert">
              <span class="alert-icon"><i class="ni ni-collection"></i></span>
              <span class="alert-text"><strong>CRIE</strong> seu cardápio</span>
          </div>
              <!-- <h1 class="text-white">CRIE SEU CARDÁPIO</h1> -->
              <p> O cardappion é perfeito para o seu negócio, seja ele do tamanho que for. Informações e preços atualizadas de forma instantânea.</p>
              
              <!-- <a href="./pages/widgets.html" class="font-weight-bold text-info mt-5">Explore widgets</a> -->
            </div>
          </div>
        </div>
      </div>   
    </section>

    <section class="py-6 bg-white">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-md-6">
            {!! QrCode::size(400)->generate('www.cardappion.com.br'); !!}
          </div>
          <div class="col-md-6">
            <div class="pr-md-5">
            <div class="alert alert-white" role="alert">
              <span class="alert-icon text-warning"><i class="ni ni-world-2"></i></span>
              <span class="alert-text text-warning"><strong>COMPARTILHE</strong> seu cardápio</span>
          </div>
              <!-- <h1> COMPARTILHE SEU CARDÁPIO</h1> -->
              <p> Acesso aos itens que realmente estão sendo servidos no dia.</p>
              <a href="{{route('login')}}" class="font-weight-bold text-dark mt-5">Acessar conta</a>
            </div>
          </div>
        </div>
      </div>
    </section> 
    
       
  
    <section class="py-0 bg-dark">
  <div class="main-content">
    
    <div class="header  py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Planos</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div> -->
    </div>
    
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="pricing card-group flex-column flex-md-row mb-3">
            <div class="card card-pricing border-0 text-center mb-4">
              <div class="card-header bg-transparent">
                <h4 class="text-uppercase ls-1 text-primary py-3 mb-0">MASTER</h4>
              </div>
              <div class="card-body px-lg-7">
                <div class="display-2">R$ 0,00</div>
                <span class="text-muted">por mês</span>
                <ul class="list-unstyled my-4">
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape bg-gradient-primary shadow rounded-circle text-white">
                          <i class="fas fa-terminal"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2">Cadastrar Produtos</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape bg-gradient-primary shadow rounded-circle text-white">
                          <i class="fas fa-terminal"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2">Cadastrar Promoções</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape bg-gradient-primary shadow rounded-circle text-white">
                          <i class="fas fa-terminal"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2">QR Code</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape bg-gradient-primary shadow rounded-circle text-white">
                          <i class="fas fa-terminal"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2">Complete documentation</span>
                      </div>
                    </div>
                  </li> 
                  
                </ul>
                <button type="button" class="btn btn-warning mb-3">Cadastre-se</button>
              </div>             
            </div>
            <div class="card card-pricing bg-gradient-dark zoom-in shadow-lg rounded border-0 text-center mb-4">
              <div class="card-header bg-transparent">
                <h4 class="text-uppercase ls-1 text-white py-3 mb-0">PREMIUM</h4>
              </div>
              <div class="card-body px-lg-7">
                <div class="display-1 text-white">R$ 69,00</div>
                <span class="text-white">por mês</span>
                <ul class="list-unstyled my-4">
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                          <i class="fas fa-terminal"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2 text-white">Complete documentation</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                          <i class="fas fa-pen-fancy"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2 text-white">Working materials in Sketch</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                          <i class="fas fa-hdd"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2 text-white">2GB cloud storage</span>
                      </div>
                    </div>
                  </li>
                </ul>
                <button type="button" class="btn btn-secondary mb-3">Cadastre-se</button>
              </div>             
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="d-flex justify-content-lg-center px-3 mt-5">
        <div>
          <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-primary">
            <i class="ni ni-building text-primary"></i>
          </div>
        </div>
        <div class="col-lg-6">
          <p class="text-white"><strong>The Arctic Ocean</strong> freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever.</p>
        </div>
      </div> -->
      <!-- <div class="row row-grid justify-content-center">
        <div class="col-lg-10">
          <div class="table-responsive">
            <table class="table table-dark mt-5">
              <thead>
                <tr>
                  <th class="px-0 bg-transparent" scope="col">
                    <span class="text-light font-weight-700">Features</span>
                  </th>
                  <th class="text-center bg-transparent" scope="col">Bravo Pack</th>
                  <th class="text-center bg-transparent" scope="col">Alpha Pack</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="px-0">IMAP/POP Support</td>
                  <td class="text-center"><i class="fas fa-check text-success"></i>
                  </td>
                  <td class="text-center"><i class="fas fa-check text-success"></i>
                  </td>
                </tr>
                <tr>
                  <td class="px-0">Email Forwarding</td>
                  <td class="text-center"><i class="fas fa-check text-success"></i>
                  </td>
                  <td class="text-center"><i class="fas fa-check text-success"></i>
                  </td>
                </tr>
                <tr>
                  <td class="px-0">Active Sync</td>
                  <td class="text-center"><i class="fas fa-check text-success"></i>
                  </td>
                  <td class="text-center"><i class="fas fa-check text-success"></i>
                  </td>
                </tr>
                <tr>
                  <td class="px-0">Multiple domain hosting</td>
                  <td class="text-center"><i class="fas fa-check text-success"></i>
                  </td>
                  <td class="text-center">
                    <span class="text-sm text-light">Limited to 1 domain only</span>
                  </td>
                </tr>
                <tr>
                  <td class="px-0">Additional storage upgrade</td>
                  <td class="text-center"><i class="fas fa-check text-success"></i>
                  </td>
                  <td class="text-center"><i class="fas fa-check text-success"></i>
                  </td>
                </tr>
                <tr>
                  <td class="px-0">30MB Attachment Limit</td>
                  <td class="text-center"><i class="fas fa-check text-success"></i>
                  </td>
                  <td class="text-center">-</td>
                </tr>
                <tr>
                  <td class="px-0">Password protected / Expiry links</td>
                  <td class="text-center"><i class="fas fa-check text-success"></i>
                  </td>
                  <td class="text-center">-</td>
                </tr>
                <tr>
                  <td class="px-0">Unlimited Custom Apps</td>
                  <td class="text-center"><i class="fas fa-check text-success"></i>
                  </td>
                  <td class="text-center">-</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div> -->
    </div>
  </div>
   
  </section> 