<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-75834608-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-75834608-2');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$menu->description}}</title>
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

    <ion-menu side="start" menu-id="first">
        <ion-header>
            <ion-toolbar color="dark">
                <ion-title>Categorias</ion-title>
            </ion-toolbar>
        </ion-header>

        <ion-list>
            @foreach($categories as $c)
                <ion-item>
                    <ion-icon slot="start" name="beer"></ion-icon>
                    <ion-label> {{ $c->name }}</ion-label>
                </ion-item>
            @endforeach
        </ion-list>
  </ion-menu>

    <div class="ion-page" main>
        <ion-toolbar color="dark">
            <ion-title>{{ $menu->description ?? 'Cardapio'}}</ion-title>
            <ion-buttons slot="start">
                <ion-button onclick="openFirst()">
                    <ion-icon slot="icon-only" name="menu" ></ion-icon>
                </ion-button>
            </ion-buttons>
        </ion-toolbar>

        <ion-content padding>

        </ion-content>
        <ion-tabs>
            <ion-tab tab="cardapio">
                <ion-content>
                <ion-list style="margin-top: 50px">
                    @forelse($menu->products as $item)
                        <ion-item href="{{route('product.detail',$item->id)}}">
                            <ion-thumbnail slot="start">
                                <img src="{{Storage::url($item->image)}}" alt="">
                            </ion-thumbnail>
                            <ion-label>{{$item->description}} - {{$item->price}}</ion-label>
                        </ion-item>
                        
                    @empty
                        <p>Nada a exibir</p>
                    @endforelse
                </ion-list>


                

    </ion-conent>
            </ion-tab>
        <ion-tab tab="promocoes">
                <ion-content>
                <ion-list>
                    <ion-item>
                        <ion-label>Pac-Man</ion-label>
                    </ion-item>
                    <ion-item>
                        <ion-label>Super Mario World</ion-label>
                    </ion-item>
                    <ion-item>
                        <ion-label>Pokémon Yellow</ion-label>
                    </ion-item>
                    <ion-item>
                        <ion-label>Mega Man X</ion-label>
                    </ion-item>
                    <ion-item>
                        <ion-label>The Legend of Zelda</ion-label>
                    </ion-item>
                    <ion-item>
                        <ion-label>Pac-Man</ion-label>
                    </ion-item>
                   
                </ion-list>
    </ion-content>
        </ion-tab>

        <ion-tab tab="parceiro">
            <ion-item style="margin-top:50px">
                <ion-label>teste do Parceiro</ion-label>

                
            </ion-item>

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
