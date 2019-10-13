<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" href="{{ asset('vendor/argon/assets/img/brand/icon2.png') }}" type="image/png">
    <script src="https://unpkg.com/@ionic/core@latest/dist/ionic.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <link href="https://unpkg.com/@ionic/core@latest/css/ionic.bundle.css" rel="stylesheet">

    <!-- Google Adsense phtolentinon@gmail.com -->
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({
      google_ad_client: "ca-pub-5608530994046947",
      enable_page_level_ads: true
    });
  </script>


    <style>
        .cardapio {
            margint-top:100px;
        }
    </style>
</head>
<body>


<ion-app>


    <div class="ion-page" main>
    <ion-header>
  <ion-toolbar color="dark">
    <ion-title ><img src="{{asset('vendor/argon/assets/img/brand/logo11.png')}}" style="width: 255px; height:57px;"></ion-title>
  </ion-toolbar>
</ion-header>

        <ion-content padding>

        </ion-content>
        <ion-tabs>
            <ion-tab tab="cardapio">
            <!-- {{ $tenant->plan }} -->
            <!-- <img src="{{asset('vendor/argon/assets/img/brand/google.jpg')}}" style="width: 400px; height:200px;"> -->
                <ion-content>
    </ion-conent>
    <ion-list style="margin-top: 50px">

      <div class="list-category">
        @foreach ($categories as $category)
          <ion-item class="item-category" href="#"
            data-route="{{ route('admin.menus.getproducts', [ 'id' => $category->id ]) }}"
            data-id="{{ $category->id }}">
            <ion-label>{{ $category->description }}</ion-label>
          </ion-item>
        @endforeach
      </div>

      <div class="list-category-itens"></div>

      <div class="item-details"></div>


                   <!-- <ion-item href="#">
                        <ion-label>Nome da categoria</ion-label>
                    </ion-item>

                    <ion-item href="#">

                        <ion-label>Nome da categoria</ion-label>
                    </ion-item>
                    <ion-item href="#">

                        <ion-label>Nome da categoria</ion-label>
                    </ion-item>
                    <ion-item href="#">

                        <ion-label>Nome da categoria</ion-label>
                    </ion-item>
                    <ion-item href="#">

                        <ion-label>Nome da categoria</ion-label>
                    </ion-item>  -->


                    <!-- <p>Nada a exibir</p> -->

            </ion-list>

            <!-- </ion-list> -->
</ion-content>




            </ion-tab>
        <ion-tab tab="promocoes">
        <!-- <img src="{{asset('vendor/argon/assets/img/brand/google.jpg')}}" style="width: 400px; height:200px; " class="top"> -->
                <ion-content>
                <!-- <ion-list> -->


                    <!-- <ion-item>
                        <ion-label><img src="{{asset('vendor/argon/assets/img/brand/google.jpg')}}" style="width: 50px; height:50px;"> Nome da Promoção e wha
                      </ion-label>
                    </ion-item> -->
                    <ion-content>

                <ion-list style="margin-top: 50px">

                  <div class="list-promo">
                    @foreach ($promotions as $promotion)
                      <ion-item class="promo" href="#"
                        data-route="{{ route('admin.menus.getpromo', [ 'id' => $promotion->id ]) }}">
                        <ion-thumbnail slot="start">
                          <img src="{{ url($promotion->image) }}" alt="">
                        </ion-thumbnail>
                        <ion-label>{{ $promotion->title }} </br> R$ {{ number_format($promotion->promotion_value,2,',','.')}} </ion-label>
                      </ion-item>
               <!-- <ion-content class="card-background-page" >
                          <ion-card class="promo" href="#" data-route="{{ route('admin.menus.getpromo', [ 'id' => $promotion->id ]) }}"s>
                            <img src="{{ url($promotion->image) }}"/>
                            <div class="card-title">{{ $promotion->title }}</div>
                            <div class="card-subtitle">R$ {{ number_format($promotion->promotion_value,2,',','.')}}</div>
                          </ion-card>
                          </ion-content> -->
                    @endforeach
                  </div>

                  <div class="promo-details"></div>





                        <!-- <p>Nada a exibir</p> -->

                </ion-list>

                <!-- </ion-list> -->
    </ion-content>
        </ion-tab>

        <ion-tab tab="sobre">
             <!-- <img src="{{asset('vendor/argon/assets/img/brand/google.jpg')}}" style="width: 400px; height:200px; align:center;" >  -->
            <ion-content>

                    <ion-content>
        <!-- <ion-item style="margin-top:5px">
                <ion-label> </ion-label>


            </ion-item>
            <ion-item style="margin-top:50px">
                <ion-label>

                <h1>{{ $tenant->name }}</h1></ion-label>


            </ion-item>
            <ion-item style="margin-top:50px">
                <ion-label><h3>Feito por cardappion.me</h3></ion-label>


            </ion-item> -->

            <ion-list style="margin-top: 50px">
            <ion-grid>
  <!-- <ion-row>
    <ion-col>
      <div class="ion-text-start">
        <h3>text-start</h3>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac vehicula lorem.
      </div>
    </ion-col>
    <ion-col>
      <div class="ion-text-end">
        <h3>text-end</h3>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac vehicula lorem.
      </div>
    </ion-col>
    <ion-col>
      <div class="ion-text-center">
        <h3>text-center</h3>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac vehicula lorem.
      </div>
    </ion-col>
  </ion-row>
  <ion-row>
    <ion-col>
      <div class="ion-text-justify">
        <h3>text-justify</h3>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac vehicula lorem.
      </div>
    </ion-col>
    <ion-col>
      <div class="ion-text-wrap">
        <h3>text-wrap</h3>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac vehicula lorem.
      </div>
    </ion-col>
    <ion-col>
      <div class="ion-text-nowrap">
        <h3>text-nowrap</h3>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </div>
    </ion-col>
  </ion-row>
</ion-grid>           -->


                <!-- <ion-item href="#">
                <ion-col >
                  <div class="ion-text-center">

                    Feito por <a href="http://www.cardappion.me" target="_blank" ><b> cardappion.me </b></a>
                  </div>
                </ion-col>

                </ion-item> -->
                <ion-col>
      <div class="ion-text-end" >
        <h2 style="margin-right:25px"><strong >{{ $tenant->name }}</strong></h2>

      </div>
    </ion-col>
                <ion-item href="#">

                    <ion-label>
                    <ion-icon name="map"></ion-icon>
                    {{ $config->address ?? '' }}, {{ $config->neighborhood ?? '' }}
                    </br>
                    {{ $config->half_address ?? '' }}
                    </br>
                    <ion-icon name="logo-whatsapp" color="success"></ion-icon>
                    {{ $config->format_whatsapp ?? '' }}    
                    <!-- <a  target="_blank" href="https://api.whatsapp.com/send?phone=55{{ $config->format_whatsapp ?? '' }}">{{ $config->format_whatsapp ?? '' }}  </a> -->
                    <!-- https://api.whatsapp.com/send?phone=55{{ $config->format_whatsapp ?? '' }} -->
                    </br>
                    <ion-icon name="call" color="dark"></ion-icon>
                    {{ $config->telephone ?? '' }}                   
                    </br>
                    <ion-icon name="logo-instagram" color="dark"> </ion-icon>
                    {{ $config->instagram ?? '' }}
                    </br>
                    <ion-icon name="logo-facebook" color="primary"></ion-icon>
                    {{ $config->fanpage ?? '' }}
                    </br>
                    <i>
                    {{ $config->site ?? '' }}
                    </i>  
                    

                    </ion-label>
                    
                </ion-item>







                        <!-- <p>Nada a exibir</p> -->

                </ion-list>

        </ion-tab>

        <ion-tab-bar slot="bottom">
            <ion-tab-button tab="sobre">
                <ion-label>Sobre</ion-label>
                <ion-icon name="business" color="default"></ion-icon>
            </ion-tab-button>

            <ion-tab-button tab="cardapio" class="btn-cardapio">
                <ion-label>Menu</ion-label>
                <ion-icon name="paper" color="default"></ion-icon>
            </ion-tab-button>

            <ion-tab-button tab="promocoes" class="btn-promo">
                <ion-label>Promoções</ion-label>
                <ion-icon name="gift" color="default"></ion-icon>
            </ion-tab-button>
        </ion-tab-bar>
      </ion-tabs>
    </div>


</ion-app>

<ion-menu-controller></ion-menu-controller>








 


<script src="{{asset('vendor/argon/assets/vendor/jquery/dist/jquery.min.js')}}"></script>

<script>
    const menuCtrl = document.querySelector('ion-menu-controller');

    function openFirst() {
        menuCtrl.enable(true, 'first');
        menuCtrl.open('first');
    }

    $('.btn-cardapio').on('click', function() {
      $('.list-category').css('display', '');
      $('.list-category-itens').empty();
      $('.item-details').empty();
    });

    $('.btn-promo').on('click', function() {
      $('.list-promo').css('display', '');
      $('.promo-details').empty();
    });

     function float2moeda(num) {
            x	=	0;
            if(num<0){
              num	=	Math.abs(num);
              x	=	1;
            }
            if(isNaN(num)){
              num	=	"0.00";
            }
            cents = Math.floor((num*100+0.5)%100);
            num = Math.floor((num*100+0.5)/100).toString();
            if(cents < 10){
              cents	=	"0" + cents;
            }
            for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++){
              num	=	num.substring(0,num.length-(4*i+3))+'.'+num.substring(num.length-(4*i+3));
            }
            ret = num + ',' + cents;
            if (x == 1){
              ret	=	' - ' + ret;
            }
            return ret;
          }

          function moeda2float(moeda){
            // moeda = moeda.replace(".","");
            moeda = moeda.replace(/\./g,"");
            moeda = moeda.replace(",",".");
            return parseFloat(moeda);
          }

    $('.item-category').on('click', function() {
      var url = $(this).data('route');

      $.ajax({
          url : url,
          type : 'get',
        })
        .done(function(data){
          var img = '{{ config('app.url') }}';
          var list = '';
          $.each(data, function(i, val) {
            list += '<ion-item href="#" onclick="product(' + val.id + ')" data-id="' + val.id + '">' +
              '<ion-thumbnail slot="start">' +
                  '<img src=' + img + '/' + val.image + ' alt="">' +
              '</ion-thumbnail>' +
              // '<ion-label>' + val.title + '</br> R$aaa ' + val.price   + '</ion-label>' +
              
              '<ion-label>' + val.title + '</br> R$ ' + float2moeda(val.price)     + '</ion-label>' +
              // '<button ion-button clear item-end>pedir</button>' +
            '</ion-item>';
          });
          $('.list-category-itens').append(list);
          $('.list-category').css('display', 'none');
        });
    });

    function product(id) {
      var url = `{{ config('app.url') }}/menus/prod/${id}`;
      $.ajax({
        url : url,
        type : 'get',
      })
      .done(function(data){
        var img = '{{ config('app.url') }}';
        var info = '';

          info += '<ion-card>' +                      
                        '<img class="" src="' + img + '/' + data.image + '" alt="">' +
                      '<ion-card-content>' +
                      '<ion-card-title>' + data.title +
                      '</ion-card-title>' +
                      '<p> R$' + float2moeda(data.price)  + 
                      '</p>' +
                      '<hr>' +
                      '<p>' + data.details + 
                      '</p>' +
                    '</ion-card-content>' +                   
                  '</ion-content>'

        $('.list-category-itens').empty();
        $('.item-details').append(info);
      });
    }

    $('.promo').on('click', function() {
      var url = $(this).data('route');

      $.ajax({
        url : url,
        type : 'get',
      })
      .done(function(data){
        var img = '{{ config('app.url') }}';
        var info = '';

          // info += '<ion-list style="margin-top: 5px">' +
          //           '<ion-item href="#">' +
          //             '<ion-thumbnail>' +
          //               '<img class="" src="' + img + '/' + data.image + '" alt="" >' +
          //             '</ion-thumbnail>' +
          //           '</ion-item>' +

          //           '<ion-item href="#">' +
          //             '<ion-label><h3>' + data.title + '</h3>' +
          //             '</br> preçooo: ' + float2moeda(data.promotion_value)  +
          //             '</br> preçooooo ' + data.details +
          //           '</ion-label>' +

          //           '</ion-item>' +
          //         '</ion-list>';


          info +=    '<ion-card>' +
                        '<img src="' + img + '/' + data.image + '" alt="" >' +
                        '<ion-card-content>' +
                          '<ion-card-title>'  + data.title + '</ion-card-title>' +
                          '</br> R$ ' + float2moeda(data.promotion_value)  +
                          '<p>' + data.details +                             
                          '</p>' +
                        '</ion-card-content>' +
                 '</ion-card>' ;





        $('.promo-details').append(info);
        $('.list-promo').css('display', 'none');
      });
    });

</script>
</body>
</html>


