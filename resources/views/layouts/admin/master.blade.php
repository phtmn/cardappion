<!DOCTYPE html>

<html lang="pt-br">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim"> -->
  <title>{{ config('app.name') }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="{{ asset('assets/css/stilo.css') }}" type="text/css">
  <link rel="icon" href="{{ asset('vendor/argon/assets/img/brand/logo3.png') }}" type="image/png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
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
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

@yield('css')
</head>

<body class="bg-gradient-default ">

    <!-- Main content -->
    <div class="main-content" id="panel">
            <div id="app">
                @include('layouts.admin.partes.navbar')
                @yield('cabecalho')
                @yield('conteudo')
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>

    <script>

      $(document).ready(function() {
        var APP_URL = {!! json_encode(url('/')) !!}
        var _TOKEN  = {!! json_encode(csrf_token()) !!}

        $('#telephone').mask('(00) 0000-0000');
        $('#whatsapp').mask('(00) 00000-0000');

        $('#category-drag').sortable({
            stop: function(event, ui) {
                const sort = document.querySelectorAll('.js-sort')
                var ids  = []

                sort.forEach(function(val, i) {
                    ids.push(val.dataset.id)
                })

                $.ajax({
                    url  : APP_URL + '/api/menu/sort',
                    type : 'POST',
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
          url : route,
          type : 'get',
        })
        .done(function(msg){
          return true;
        })
      });

      $('.js-menu-action').on('click', function() {
        var id = $(this).data('id');
        $.ajax({
          url : $(this).data('route'),
          type : 'get',
        })
        .done(function(msg){
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
              if(validacep.test(cep)) {

                  //Preenche os campos com "..." enquanto consulta webservice.
                  $("#address").val("...");
                  $("#neighborhood").val("...");
                  $("#city").val("...");
                  $("#state").val("...");

                  //Consulta o webservice viacep.com.br/
                  $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

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
