<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <title>{{$menu->description}}</title> -->
    <script src="https://unpkg.com/@ionic/core@latest/dist/ionic.js"></script>
    <link href="https://unpkg.com/@ionic/core@latest/css/ionic.bundle.css" rel="stylesheet">
    <style>
        .cardapio {
            margint-top:100px;
        }
    </style>
</head>
<body>
<ion-app>


    <div class="ion-page" main>


        <ion-content padding>

        </ion-content>
        <ion-tabs>
            <ion-tab tab="cardapio">
            <img src="{{asset('vendor/argon/assets/img/brand/google.jpg')}}" style="width: 400px; height:200px;">
                <ion-content>
    </ion-conent>
    <ion-list style="margin-top: 5px">

                    <ion-item href="#">

                        <ion-label>Nome da categoria cadastrada </br>e marcada como publicada</ion-label>
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
                    </ion-item>
                    <ion-item href="#">

                        <ion-label>Nome da categoria</ion-label>
                    </ion-item>


                    <!-- <p>Nada a exibir</p> -->

            </ion-list>

            <!-- </ion-list> -->
</ion-content>




            </ion-tab>
        <ion-tab tab="promocoes">
        <img src="{{asset('vendor/argon/assets/img/brand/google.jpg')}}" style="width: 400px; height:200px; " class="top">
                <ion-content>
                <!-- <ion-list> -->


                    <!-- <ion-item>
                        <ion-label><img src="{{asset('vendor/argon/assets/img/brand/google.jpg')}}" style="width: 50px; height:50px;"> Nome da Promoção e R$</ion-label>
                    </ion-item> -->
                    <ion-content>

                <ion-list style="margin-top: 5px">

                        <ion-item href="#">
                            <ion-thumbnail slot="start">
                                <img src="{{asset('vendor/argon/assets/img/brand/google.jpg')}}" alt="">
                            </ion-thumbnail>
                            <ion-label>nome </br> R$ valor</ion-label>
                        </ion-item>

                        <ion-item href="#">
                            <ion-thumbnail slot="start">
                                <img src="{{asset('vendor/argon/assets/img/brand/google.jpg')}}" alt="">
                            </ion-thumbnail>
                            <ion-label>nome </br> R$ valor</ion-label>
                        </ion-item>
                        <ion-item href="#">
                            <ion-thumbnail slot="start">
                                <img src="{{asset('vendor/argon/assets/img/brand/google.jpg')}}" alt="">
                            </ion-thumbnail>
                            <ion-label>nome </br> R$ valor</ion-label>
                        </ion-item>
                        <ion-item href="#">
                            <ion-thumbnail slot="start">
                                <img src="{{asset('vendor/argon/assets/img/brand/google.jpg')}}" alt="">
                            </ion-thumbnail>
                            <ion-label>nome </br> R$ valor</ion-label>
                        </ion-item>
                        <ion-item href="#">
                            <ion-thumbnail slot="start">
                                <img src="{{asset('vendor/argon/assets/img/brand/google.jpg')}}" alt="">
                            </ion-thumbnail>
                            <ion-label>nome </br> R$ valor</ion-label>
                        </ion-item>
                        <ion-item href="#">
                            <ion-thumbnail slot="start">
                                <img src="{{asset('vendor/argon/assets/img/brand/google.jpg')}}" alt="">
                            </ion-thumbnail>
                            <ion-label>nome </br> R$ valor</ion-label>
                        </ion-item>


                        <!-- <p>Nada a exibir</p> -->

                </ion-list>

                <!-- </ion-list> -->
    </ion-content>
        </ion-tab>

        <ion-tab tab="parceiro">
            <img src="{{asset('vendor/argon/assets/img/brand/google.jpg')}}" style="width: 400px; height:200px;">
            <ion-content>
                
                    <ion-content>
        <!-- <ion-item style="margin-top:5px">
                <ion-label> </ion-label>


            </ion-item>
            <ion-item style="margin-top:50px">
                <ion-label>

                <h1>{{ $menu->name }}</h1></ion-label>


            </ion-item>
            <ion-item style="margin-top:50px">
                <ion-label><h3>Feito por cardappion.me</h3></ion-label>


            </ion-item> -->

            <ion-list style="margin-top: 5px">

                       

                        <ion-item href="#">
                            <!-- <ion-thumbnail slot="start">
                                <img src="{{asset('vendor/argon/assets/img/brand/google.jpg')}}" alt="">
                            </ion-thumbnail> -->
                            <ion-label>{{ $menu->name }}</ion-label>
                        </ion-item>

                        <ion-item href="#">
                           
                            <ion-label>Cidade - ESTADO
                            </br>
                            whatspp
                            </br>
                            instagram
                            
                            
                            </ion-label>
                            
                        </ion-item>
                        <ion-item style="margin-top:50px">
                             <ion-label><h3>Feito por cardappion.me</h3></ion-label>


                            </ion-item>
                        


                        <!-- <p>Nada a exibir</p> -->

                </ion-list>

        </ion-tab>

        <ion-tab-bar slot="bottom">
            <ion-tab-button tab="parceiro">
                <ion-label>Sobre</ion-label>
                <ion-icon name="business"></ion-icon>
            </ion-tab-button>

            <ion-tab-button tab="cardapio">
                <ion-label>Menu</ion-label>
                <ion-icon name="paper"></ion-icon>
            </ion-tab-button>

            <ion-tab-button tab="promocoes">
                <ion-label>Promoções</ion-label>
                <ion-icon name="gift"></ion-icon>
            </ion-tab-button>



        </ion-tab-bar>
        </ion-tabs>
    </div>


</ion-app>

<ion-menu-controller></ion-menu-controller>

<script>
    const menuCtrl = document.querySelector('ion-menu-controller');

    function openFirst() {
        menuCtrl.enable(true, 'first');
        menuCtrl.open('first');
    }


</script>
</body>
</html>
