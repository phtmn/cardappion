<section class="section  bg-primary">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12 ml-auto mr-auto">
        <section class="blogs-3">
          <div class="container">
            <div class="row">
              <div class="col-lg-10 col-md-8 mx-auto">
                <h2 class="title mb-5 text-white">Promoções</h2>
                <div class="card card-blog card-plain blog-horizontal mb-5">
                  
<div class="row">
        <div class="col-xl-4">          
          <div class="card">            
            <div class="card-body">              
              <ul class="list-group list-group-flush list my--3">
              @forelse ($promotions as $promotion)
                <li class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">                      
                      <a href="#" >
                        <img alt="Image placeholder" src="{{ url("{$promotion->image}") }}" class="img-fluid rounded shadow-lg" style="width: 80px;">
                      </a>
                    </div>
                    <div class="col ml--2">
                      <h4 class="mb-0">
                        <a href="#!"> {{ $promotion->title }}</a>
                      </h4>
                      <!-- <span class="text-success">●</span> -->
                      <small>R$
                      {{ number_format($promotion->promotion_value,2,',','.')}}</small>
                    </div>
                    <div class="col-auto">
                      <button type="button" class="btn btn-sm btn-primary">Add</button>
                    </div>
                  </div>
                </li>  
              
              @empty

<!-- <i class="fab fa-twitter"></i> -->
<span class="alert-text"><strong>Nenhuma</strong> categoria cadastrada!</span>

@endforelse
</ul>
            </div>
          </div>
        </div>



                  <!-- <div class="row">
                    <div class="col-md-12 mx-auto">
                      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="https://images.unsplash.com/photo-1457904375453-3e1fc2fc76f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1800&q=80" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="https://images.unsplash.com/photo-1526404801122-40fc40fca08f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2553&q=80" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="https://images.unsplash.com/photo-1524095731963-b4e38d1b3329?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2550&q=80" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</section>
