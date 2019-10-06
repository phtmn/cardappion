<div class="main-content">
  <section class="py-6 mt--0 bg-black" id="sobre">
    <div class="container">
      <div class="row row-grid align-items-center">
        <div class="col-md-6 order-md-2">
          <!-- <img src="{{asset('vendor/argon/assets/img/theme/landing-3.png')}}" class="img-fluid"> -->
        </div>
        <div class="col-md-6 order-md-1">
          <div class="pr-md-5 text-white">
            <h1 class="text-white">{{ $tenant->name }}</h1>

            {{ $config->address ?? '' }}, {{ $config->neighborhood ?? '' }}
            </br>
            {{ $config->half_address ?? '' }}
            </br>

            {{ $config->format_whatsapp ?? '' }}
            <!-- <a  target="_blank" href="https://api.whatsapp.com/send?phone=55{{ $config->format_whatsapp ?? '' }}">{{ $config->format_whatsapp ?? '' }}  </a> -->
            <!-- https://api.whatsapp.com/send?phone=55{{ $config->format_whatsapp ?? '' }} -->
            </br>

            {{ $config->telephone ?? '' }}
            </br>

            {{ $config->instagram ?? '' }}
            </br>

           

            {{ $config->fanpage ?? '' }}
            </br>
            <i>
              {{ $config->site ?? '' }}
            </i>
            <!-- <a href="./pages/widgets.html" class="font-weight-bold text-info mt-5">Explore widgets</a> -->
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="py-6 bg-danger" id="menu">
    <div class="main-content">

      <div class="header  py-7 py-lg-8 pt-lg-9">
        <div class="container">
          <div class="header-body text-center mb-7">
            <div class="row justify-content-center">
              <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                <h1 class="text-white"> <i class="ni ni-collection"></i> Menu</h1>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            @foreach ($categories as $category)
            <p>
              <div class="alert alert-white alert-dismissible fade show" role="alert" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <span class="alert-inner--icon"><i class="ni ni-ungroup "></i></span>
                <span class="alert-inner--text"><strong>{{ $category->description }} </strong> </span>
               
              </div>
              <!-- <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                {{ $category->description }}
              </a> -->
              <!-- <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Button with data-target
  </button> -->
            </p>
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                Anim pariatur cliche reprehenderit.
              </div>
            </div>
            @endforeach


          </div>

        </div>
      </div>
      <!-- Modal  -->
      <div class="modal fade" id="modal-menu" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title" id="modal-title-default">Promoções</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <p> </p>
              <p><img alt="Image placeholder" style="width: 50px;" class="img-fluid rounded shadow" src=" "></p>
              <p> </p>
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              <button type="button" class="btn btn-primary">R$ </button>
            </div>
          </div>
        </div>
  </section>





  <section class="py-6 bg-default" id="promocoes">
    <div class="main-content">

      <div class="header  py-7 py-lg-8 pt-lg-9">
        <div class="container">
          <div class="header-body text-center mb-7">
            <div class="row justify-content-center">
              <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                <h1 class="text-white"><i class="ni ni-notification-70"></i> Promoções</h1>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="pricing card-group flex-column flex-md-row mb-3">
              <div class="card card-pricing border-0 mb-4">               
                <div class="card-body">
                  @foreach ($promotions as $promotion)
                  <ul class="list-group list-group-flush list my--3">
                    <!-- <li class="list-group-item px-0" data-toggle="modal" data-target="#modal-promocao"> -->
                    <li class="list-group-item px-0" >
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <!-- Avatar -->

                          <img alt="Image placeholder" style="width: 50px;" class="img-fluid rounded shadow" src="{{ url($promotion->image) }}">

                        </div>
                        <div class="col ml--2">
                          <h4 class="mb-0">
                            {{ $promotion->title }}
                          </h4>
                          <!-- <span class="text-success">●</span>
                      <small>Online</small> -->
                      <h5><span class="badge badge-pill badge-danger"><a href="javascript:void(0)" class="text-dark detalhe-promocao" data-id="{{ $promotion->id }}"> <b style="text-transform: capitalize; "> Informações2 </b></a></span></h5>
                      <!-- <h5><span class="badge badge-pill badge-danger"><a href="javascript:void(0)" class="text-dark detalhe-promocao" data-id="{{ $promotion->id }}"> <i class="ni ni-fat-add"></i><b style="text-transform: capitalize; "> Informações </b></a></span></h5> -->
                        </div>
                        <div class="col-auto">
                          <button type="button" class="btn btn-sm btn-primary">R$ {{ number_format($promotion->promotion_value,2,',','.')}}</button>
                        </div>
                      </div>
                      <p></p>
                    </li>
                  </ul>
                  @endforeach
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="modal fade" id="modal-promocao" tabindex="-1" role="dialog" aria-labelledby="modal-promocao" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">	
        <img alt="Image placeholder" style="width: 150px;" class="img-fluid rounded shadow" src="{{ url($promotion->image) }}">				
					<h3>Resumo </h3>					
					<h3>Objetivos</h3>
					<p class="text-justify mt-3 mx-3" style="text-indent: 15px;" id="title"></p>
				</div>
			</div>
		</div>

   
  </section>



