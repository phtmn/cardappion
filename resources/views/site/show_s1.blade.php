<div class="header bg-white pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <!-- <i class="ni ni-collection text-white"></i>
                    <h3 class="h3 text-white d-inline-block mb-0">Menu</h3> -->
          <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
            <i class="ni ni-collection"></i>

          </div>
          <h3 class="display-5 text-dark d-inline-block mb-0"> Sobre</h3>
        </div>
        <div class="col-lg-6 col-5 text-right">


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
          <div class="card-body">
            <div class="text-center">
              <a href="#">
                @if (isset($config->image))
                <img src="{{ Storage::url("{$config->image}") }}" class="img-fluid floating" style="width:150px; height:150px">
                @endif
              </a>

              <h5 class="h3 mt-3">
                {{ $tenant->name }}<span class="font-weight-light"></span>
              </h5>
              {{--<div class="h5 font-weight-300">
                <i class="ni location_pin mr-2"></i>{{ auth()->user()->email }}
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8">
    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h5 class="mb-0">Collapsible Group Item #1</h5>
        </div>
        <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <p>{{$config->zipcode}}</p>
            <p>{{$config->zipcode}}</p>
            <p>{{$config->zipcode}}</p>
            <p>{{$config->zipcode}}</p>
            <p>{{$config->zipcode}}</p>
            <p>{{$config->zipcode}}</p>
            <p>{{$config->zipcode}}</p>
          </div>
        </div>
      </div>


    </div>

  </div>

</div>
</div>
</div>