<!DOCTYPE html>

<html lang="pt-br">

<head>
  <!-- Google Analytics phtolentinomn@gmail.com -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-5NLKZ5BRSP"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-5NLKZ5BRSP');
  </script>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim"> -->
  <title> cardappion.com </title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="{{ asset('assets/css/stilo.css') }}" type="text/css">
  <link rel="icon" href="{{ asset('vendor/argon/assets/img/brand/on.png') }}" type="image/png">
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">: -->

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/css/argon.min.css?v=1.0.0') }}" type="text/css">


  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/lavalamp/js/jquery.lavalamp.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>
  <script src="{{ asset('assets/js/argon.min.js?v=1.0.0') }}"></script>
  <script src="{{ asset('assets/js/demo.min.js') }}"></script>

  {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

  @yield('css')
  @yield('style')
</head>

<body class="bg-gradient-default ">

  <!-- Main content -->
  <div class="main-content" id="panel">
    <div id="app">
      <nav id="navbar-main" class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-dark bg-white nav-stilo">
        <div class="container">
          <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="ni ni-bold-down bg-white text-dark"></i></span>
          </button>
          <a class="navbar-brand mx-auto" href="{{route('site')}}">
            <img src="{{asset('vendor/argon/assets/img/brand/logo_sem_slogan.png')}}" alt="{{ config('app.name') }}" class="img-fluid" style="width:215px; height:50px">
          </a>
          <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
            <div class="navbar-collapse-header">
              <div class="row">
                <div class="col-6 collapse-brand">

                </div>
                <div class="col-6 collapse-close">
                  <button type="button" class="navbar-toggler " data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                  </button>
                </div>
              </div>
            </div>

            <ul class="navbar-nav align-items-lg-center ml-lg-auto navbar-nav-hover">

             {{-- <li class="nav-item dropdown  ">
                <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="nav-link-inner--text text-dark"><b> <i class="ni ni-bold-down"></i></b></span>
                </a>


                <div class="dropdown-menu dropdown-menu-xl ">
                  <div class="dropdown-menu-inner">
                    <a href="{{route('panel.index')}}" class="media d-flex align-items-center">
                      <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                        <i class="ni ni-tv-2"></i>
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="heading text-dark mb-md-1">Painel</h6>

                      </div>
                    </a>
                    <a href="{{route('config.createEdit')}}" class="media d-flex align-items-center">
                      <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                        <i class="ni ni-building"></i>
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="heading text-dark mb-md-1">Perfil</h6>

                      </div>
                    </a>
                    <a href="{{route('products.index')}}" class="media d-flex align-items-center">
                      <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                        <i class="ni ni-bullet-list-67"></i>
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="heading text-dark mb-md-1">Produtos</h6>

                      </div>
                    </a>
                    <a href="{{route('menus.index')}}" class="media d-flex align-items-center">
                      <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                        <i class="ni ni-collection"></i>
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="heading text-dark mb-md-1">Menu</h6>
                      </div>
                    </a>
                     <hr class="d-lg-none">
                    <a href="https://blog.cardappion.com"class="media d-flex align-items-center">
                      <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                        <i class="fab fa-wordpress"></i>
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="heading text-dark mb-md-1">Blog</h6>
                      </div>
                    </a>
                    <a href="https://www.facebook.com/cardappion" target="_blank" class="media d-flex align-items-center">
                      <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                        <i class="fab fa-facebook"></i>
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="heading text-dark mb-md-1">Facebook</h6>
                      </div>
                    </a>
                    <a href="https://www.instagram.com/cardappion"  class="media d-flex align-items-center">
                      <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                        <i class="fab fa-instagram"></i>
                      </div>
                      <div class="media-body ml-3">

                      <h6 class="heading text-dark mb-md-1">Instagram</h6>
                      </div>
                    </a>
                    <a href="https://www.linkedin.com/company/cardappion/" target="_blank" class="media d-flex align-items-center">
                      <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                        <i class="fab fa-linkedin"></i>
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="heading text-dark mb-md-1">LinkedIn</h6>
                      </div>
                    </a> 
                    <hr class="d-lg-none">
                  </div>
                </div>
              </li> --}}


              <li class="nav-item p-2">
                <a href="{{route('panel.index')}}" class=" text-dark mb-md-1  my-2">
                 <b>Painel </b> 
                </a>
              </li>
              <li class="nav-item p-2">
                <a href="{{route('config.createEdit')}}" class=" text-dark mb-md-1 my-2">
                  <b>Perfil </b>  
                </a>
              </li>
              <li class="nav-item p-2">
                <a href="{{route('products.index')}}" class=" text-dark mb-md-1 my-2">
                <b>Produtos  </b>  
                </a>
              </li>
              <li class="nav-item p-2 ">
                <a href="{{route('menus.index')}}" class=" text-dark mb-md-1 my-2 ">
                <b>Menu </b>  
                </a>
              </li>

              <li class="nav-item p-1">
                <a href="{{ Auth::user()->tenant->url_token }}" class="btn btn-secondary my-2">


                  <span class="nav-link-text text-warning ">Landing Page </span>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('logout')}}" class="btn btn-secondary my-2 " onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">


                  <span class="nav-link-text text-warning"> Sair </span>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </a>
              </li>



            </ul>
          </div>
        </div>
      </nav>

      @yield('cabecalho')
      @yield('conteudo')
    </div>
  </div>
  </div>

  <script src="{{ asset('js/jquery.mask.min.js') }}"></script>

  <script>
    $(document).ready(function() {
      // var APP_URL = {
      //   !!json_encode(url('/')) !!
      // }
      // var _TOKEN = {
      //   !!json_encode(csrf_token()) !!
      // }

      $('.js-datatable').dataTable();

      $('.js-datatable2').dataTable();
      $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
          'excelHtml5',
          'csvHtml5',
          'pdfHtml5'
        ]
      });


      $('#whatsapp').mask('(00) 00000-0000');
      $('#telegram').mask('(00) 0000-0000');

      $('#category-drag').sortable({
        stop: function(event, ui) {
          const sort = document.querySelectorAll('.js-sort')
          var ids = []

          sort.forEach(function(val, i) {
            ids.push(val.dataset.id)
          })

          $.ajax({
            url: APP_URL + '/api/menu/sort',
            type: 'POST',
            data: {
              "_token": _TOKEN,
              "sort": JSON.stringify(ids)
            }
          })
        }
      });
    });

    $('.js-checkbox').on('click', function(e) {
      var route = $(this).data('route');
      $.ajax({
          url: route,
          type: 'get',
        })
        .done(function(msg) {
          return true;
        })
    });

    $('.js-menu-action').on('click', function() {
      var id = $(this).data('id');
      $.ajax({
          url: $(this).data('route'),
          type: 'get',
        })
        .done(function(msg) {
          console.log('ok - ' + id);
          $('.js-table-' + id).hide(1000, function() {
            $(this).remove();
          });
        })
    });

    function limpa_formulário_cep() {
      // Limpa valores do formulário de cep.
      $("#address").val("");
      $("#neighborhood").val("");
      $("#city").val("");
      $("#us").val("");
    }

    //Quando o campo cep perde o foco.
    $("#cep").blur(function() {

      //Nova variável "cep" somente com dígitos.
      var cep = $(this).val().replace(/\D/g, '');

      //Verifica se campo cep possui valor informado.
      if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if (validacep.test(cep)) {

          //Preenche os campos com "..." enquanto consulta webservice.
          $("#address").val("...");
          $("#neighborhood").val("...");
          $("#city").val("...");
          $("#state").val("...");

          //Consulta o webservice viacep.com.br/
          $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

            if (!("erro" in dados)) {
              //Atualiza os campos com os valores da consulta.
              $("#address").val(dados.logradouro);
              $("#neighborhood").val(dados.bairro);
              $("#city").val(dados.localidade);
              $("#us").val(dados.uf);
            } //end if.
            else {
              //CEP pesquisado não foi encontrado.
              limpa_formulário_cep();
              alert("CEP não encontrado.");
            }
          });
        } //end if.
        else {
          //cep é inválido.
          limpa_formulário_cep();
          alert("Formato de CEP inválido.");
        }
      } //end if.
      else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
      }
    });
  </script>


  @yield('js')
</body>

</html>