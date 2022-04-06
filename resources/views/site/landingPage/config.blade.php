  <section class="bg-white ">

    <div class="main-content  mt-6 ">
      <div class="header  pb-6">
        <div class="container-fluid">
          <div class="header-body">

          </div>
        </div>
      </div>



  <div class="container-fluid mt--5">
    <div class="row">
      <div class="col-lg-4">
        <div class="card-wrapper">
          <div class="">
            <div class="card-body">
              <div class="text-center">
                <a>
                @if($config->image ?? '')
                  <img src="{{ Storage::url("{$config->image }") }}" class="img-fluid rounded-circle shadow" style="width:225px; height:225px">

      @else
      <img src="{{asset('vendor/argon/assets/img/brand/no_foto.png')}}" class="img-fluid rounded-circle shadow" style="width:225px; height:225px">
      @endif

      </a>
    </div>
    <div class="text-center mt-2">
      <a>
        {{ $tenant->name }}

      </a>
    </div>

    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 ">
      <div class="">
        <div class="card-body">
          <ul class="list-group list-group-flush list my--3">
            <li class="list-group-item px-0">
              <div class="row align-items-center">
                <div class="col ">
                  <h4 class="mb-0">
                    <a> {{$config->address ?? ''}} </a>
                    <p> {{$config->neighborhood ?? ''}} </p>
                  </h4>
                  <small>{{$config->city ?? ''}} {{$config->us ?? ''}}</small>
                </div>
              </div>
            </li>
          </ul>

          <p class="mt-3 mb-0 text-sm">
            <a class="text-nowrap text-dark font-weight-600"> </a>
          </p>

          <div class="row">

            <div class="col-auto  mt-3">
              <!-- Avatar -->
              @if($config->whatsapp ?? '')
              <a target="_blank" href="https://api.whatsapp.com/send?phone=55{{$config->whatsapp}}" class="avatar rounded-circle">
                <img alt="Image placeholder" src="{{asset('/vendor/argon/assets/img/brand/zap.png')}}">
              </a>
              @endif

              @if($config->telegram ?? '')
              <a target="_blank" href="https://t.me/{{$config->telegram}}" class="avatar rounded-circle">
                <img alt="Image placeholder" src="{{asset('/vendor/argon/assets/img/brand/telegram.png')}}">
              </a>
              @endif

              @if($config->instagram ?? '')
              <a target="_blank" href="https://www.instagram.com/{{$config->instagram}}" class="avatar rounded-circle">
                <img alt="Image placeholder" src="{{asset('/vendor/argon/assets/img/brand/instagram.png')}}">
              </a>
              @endif

              @if($config->fanpage ?? '')
              <a target="_blank" href="https://www.facebook.com/{{$config->fanpage}}" class="avatar rounded-circle">
                <img alt="Image placeholder" src="{{asset('/vendor/argon/assets/img/brand/face.png')}}">
              </a>
              @endif

              @if($config->site ?? '')
              <a target="_blank" href="http://{{$config->site}}" class="avatar rounded-circle">
                <img alt="Image placeholder" src="{{asset('/vendor/argon/assets/img/brand/sites.png')}}">
              </a>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-lg-4 ">
      <div class="">
        <div class="card-body">
          <ul class="list-group list-group-flush list my--3">
            <li class="list-group-item px-0">
              <div class="row align-items-center">
                <div class="col ml--2">
                  <h4 class="mb-0">
                    <a> Informações adicionais </a>
                  </h4>
                  @if($config->details ?? '')
                  <small>{{$config->details }}</small>
                  @else
                  <small class="text-danger">Informações adicionais não cadastrada!</small>
                  @endif

                </div>
              </div>
            </li>
          </ul>

        </div>
      </div>
    </div>
    </div>


    </div>
    </div>
    </div>

  </section>

