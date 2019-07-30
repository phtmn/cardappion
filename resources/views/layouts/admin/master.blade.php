<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Cardapion Admin</title>
  <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-pro" />
  <link rel="icon" href="{{asset('vendor/argon/assets/img/brand/icon2.png')}}" type="image/png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="{{asset('vendor/argon/assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('vendor/argon/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('vendor/argon/assets/css/argon.min.css?v=1.0.0')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('vendor/argon/assets/css/stilo.css')}}" type="text/css">
@yield('css')
</head>



<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Sidenav -->
  @include('layouts.admin.partes.menu')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('layouts.admin.partes.navbar')
    @yield('cabecalho')
    @yield('conteudo')
  
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center text-lg-left text-muted">
              &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Todos os cardápios e promoções em um único lugar Tim</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Soluções em Cardápios Digitais</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="{{asset('vendor/argon/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/argon/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/argon/assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{asset('vendor/argon/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{asset('vendor/argon/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <script src="{{asset('vendor/argon/assets/vendor/lavalamp/js/jquery.lavalamp.min.js')}}"></script>
  <script src="{{asset('vendor/argon/assets/vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>
  <script src="{{asset('vendor/argon/assets/js/argon.min.js?v=1.0.0')}}"></script>
  <script src="{{asset('vendor/argon/assets/js/demo.min.js')}}"></script>



  
   
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>

    <script>

     

      $(document).ready(function() {                
        $('#telephone').mask('(00) 0000-0000');
        $('#whatsapp').mask('(00) 0000-0000');        
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
