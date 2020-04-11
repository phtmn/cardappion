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
    <title>{{$promotion->description}}</title>
    <script src="https://unpkg.com/@ionic/core@latest/dist/ionic.js"></script>
    <link href="https://unpkg.com/@ionic/core@latest/css/ionic.bundle.css" rel="stylesheet">

</head>
<body>
<ion-app>
    <ion-header>
        <ion-toolbar color="primary">
            <ion-title>Uma oferta de: {{ $promotion->tenant->name ?? 'CardappiON'}}</ion-title>
        </ion-toolbar>
    </ion-header>
    <ion-content>
        <ion-card>
            <img src="{{Storage::url($promotion->image)}}"/>
            <ion-card-header>
                <ion-card-title>{{ $promotion->title }}</ion-card-title>
                <ion-card-subtitle>oferta válida até: {{ date('d/m/Y',strtotime($promotion->expiration_date)) }}</ion-card-subtitle>
            </ion-card-header>

            <ion-card-content>
                {{ $promotion->details ?? '' }}
            </ion-card-content>
        </ion-card>
    </ion-content>

</ion-app>

</body>
</html>
