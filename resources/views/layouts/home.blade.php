<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-75834608-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-75834608-2');
    </script>
    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>CardAppOn</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('vendor/home/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/home/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/home/css/vendor.css')}}">

    <!-- script
    ================================================== -->
    <script src="{{asset('vendor/home/js/modernizr.js')}}"></script>
    <script src="{{asset('vendor/home/js/js/pace.min.js')}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{asset('vendor/home/imagens/ico.jpg')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('vendor/home/images/ico.jpg')}}" type="image/x-icon">

</head>

<body id="top">

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-jump">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header 
    ================================================== -->
    <header class="s-header">

        <div class="row">
            <div class="header-logo">
                <a class="site-logo" href="index.html">
                    <img src="{{asset('vendor/home/images/logo.jpg')}}" alt="Homepage">
                </a>
            </div>
    
            <nav class="header-nav-wrap">
                <ul class="header-main-nav">
                    <li class="current"><a class="smoothscroll" href="#home" title="intro">Home</a></li>
                    <li><a class="smoothscroll" href="#about" title="about">Sobre Nós</a></li>
                    <li><a class="smoothscroll" href="#features" title="features">Serviços</a></li>
                    <li><a class="smoothscroll" href="#pricing" title="pricing">Planos</a></li>
                    <li><a class="smoothscroll" href="#download" title="download">Download</a></li>	
                </ul>
    
                <div class="header-cta">
                    <a href="{{route('login')}}" class="btn btn--primary header-cta__btn "> Entrar</a>
                    <a href="{{route('register')}}" class="btn btn--success header-cta__btn "> Cadastre-se</a>
                </div>
            </nav> <!-- end header-nav-wrap -->
    
            <a class="header-menu-toggle" href="#"><span>Menu</span></a>
        </div>

    </header> <!-- end header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="{{asset('vendor/home/images/hero-bg.jpg')}}" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <div class="home-content__left">
                    <h1>
                    Soluções em Cardápios Digitais <br>
     
                    </h1>
    
                    <h3>
                    Todos os cardápios e promoções em um único lugar. 
                    
                    </h3>
    
                    <div class="home-content__btn-wrap">
                        <a href="#download" class="btn btn--primary home-content__btn smoothscroll">
                           Download App
                        </a>
                    </div>
                </div> <!-- end home-content__left-->

                <div class="home-content__right">
                    <!-- <img src="{{asset('vendor/home/images/hero-app-screens-800.png')}}" srcset="{{asset('vendor/home/images/images/hero-app-screens-800.png 1x, hero-app-screens-1600.png 2x')}}, {{asset('vendor/home/images/images/hero-app-screens-1600.png 2x')}}"> -->
                    <img src="{{asset('vendor/home/images/hero-app-screens-800.png')}}" >
                </div> <!-- end home-content__right -->

            </div> <!-- end home-content__main -->

            <ul class="home-content__social">
                <li><a href="#0">Instagram</a></li>
                <li><a href="#0">Facebook</a></li>
                <li><a href="#0">twitter</a></li>
                
            </ul>

        </div> <!-- end home-content -->

        <a href="#about" class="home-scroll smoothscroll">
            <span class="home-scroll__text">Scroll</span>
            <span class="home-scroll__icon"></span>
        </a> 

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id="about" class="s-about target-section">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1">
                    Sobre Nós
                </h1>
                <p class="lead">
                    Por uma vida mais ágil e simples, nosso objetivo é melhorar os estabelecimentos de alimentação com soluções baseadas em cardápios digitais.
                </p>
            </div>
        </div> <!-- end section-header -->
<!--
        <div class="row wide about-desc" data-aos="fade-up">

            <div class="col-full slick-slider about-desc__slider">

                <div class="about-desc__slide">
                    <h3 class="item-title">Intuitive.</h3>

                    <p>
                    Et nihil atque ex. Reiciendis et rerum ut voluptate. Omnis molestiae nemo est. 
                    Ut quis enim rerum quia assumenda repudiandae non cumque qui. Amet repellat 
                    omnis ea aut cumque eos.
                    </p>
                </div>  

                <div class="about-desc__slide">
                    <h3 class="item-title">Smart.</h3>

                    <p>
                    Et nihil atque ex. Reiciendis et rerum ut voluptate. Omnis molestiae nemo est. 
                    Ut quis enim rerum quia assumenda repudiandae non cumque qui. Amet repellat 
                    omnis ea aut cumque eos.
                    </p>
                </div>  

                <div class="about-desc__slide">
                    <h3 class="item-title">Powerful.</h3>

                    <p>
                    Et nihil atque ex. Reiciendis et rerum ut voluptate. Omnis molestiae nemo est. 
                    Ut quis enim rerum quia assumenda repudiandae non cumque qui. Amet repellat 
                    omnis ea aut cumque eos.
                    </p>
                </div>  

                <div class="about-desc__slide">
                    <h3 class="item-title">Secure.</h3>

                    <p>
                    Et nihil atque ex. Reiciendis et rerum ut voluptate. Omnis molestiae nemo est. 
                    Ut quis enim rerum quia assumenda repudiandae non cumque qui. Amet repellat 
                    omnis ea aut cumque eos.
                    </p>
                </div>  

            </div> 
            -->
        </div> <!-- end about-desc -->

    </section> <!-- end s-about -->


    <!-- about-how
    ================================================== -->
    <section id="about-how" class="s-about-how">

        <div class="row">
           <div class="col-full video-bg" data-aos="fade-up">

                <div class="shadow-overlay"></div>

                <a class="btn-video" href="https://player.vimeo.com/video/14592941?color=00a650&title=0&byline=0&portrait=0" data-lity>
                    <span class="video-icon"></span>
                </a>

                <div class="stats">
                    <div class="item-stats">
                        <span class="item-stats__num">
                            3.1M
                        </span>
                        <span class="item-stats__title">
                            Downloads
                        </span>
                    </div> <!-- end item-stats -->
                    <div class="item-stats">
                        <span class="item-stats__num">
                            24K
                        </span>
                        <span class="item-stats__title">
                            Positive Reviews
                        </span>
                    </div> <!-- end item-stats -->
                </div>
           </div> <!-- end video-bg -->
        </div>

        <div class="row process-wrap">

            <h2 class="display-2 text-center" data-aos="fade-up">Fazendo...</h2>

            <div class="process" data-aos="fade-up">
                <div class="process__steps block-1-2 block-tab-full group">

                    <div class="col-block step">
                        <h3 class="item-title">Cadastra-se na plataforma</h3>
                        <p>Cadastre-se agora no cardAppOn para organizar e adquirir mais agilidade ao seu delivery.    </p> 
                    </div>

                    <div class="col-block step">
                        <h3 class="item-title">Cadastre seus clientes</h3>
                        <p>Você conhece bem os seus clientes? Tenha um cadastro completo das informações pessoais bem como suas principais preferências.</p> 
                    </div>
               
                    <div class="col-block step">
                        <h3 class="item-title">Cadastre seu cardápio </h3>
                        <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p> -->
                    </div>

                    <div class="col-block step">
                        <h3 class="item-title">Envie o cardápio aos seus clientes</h3>
                        <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p> -->
                    </div>  

                  

                </div> <!-- end process__steps -->
           </div> <!-- end process -->
        </div> <!-- end about-how -->

    </section> <!-- end s-about-how -->


    <!-- features
    ================================================== -->
    <section id="features" class="s-features target-section">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1">
                    Serviços
                </h1>
                <p class="lead">
                    O cardAppOn é perfeito para o seu estabeleciomento, seja ele do tamanho que for.

                
                </p>
            </div>
        </div> <!-- end section-header -->

        <div class="row features block-1-4 block-m-1-2">

            <div class="col-block item-feature" data-aos="fade-up">
                <div class="item-feature__icon">
                    <i class="icon-upload"></i>
                </div>
                <div class="item-feature__text">
                    <h3 class="item-title">Agilidade</h3>
                    <p>Cardápion digital a todo momento.
                    </p>
                </div>
            </div>

            <div class="col-block item-feature" data-aos="fade-up">
                <div class="item-feature__icon">
                    <i class="icon-video-camera"></i>
                </div>
                <div class="item-feature__text">
                    <h3 class="item-title">Disponibilidade</h3>
                    <p>Cardápion digital a todo momento com acesso aos itens que realmente estão sendo servidos no dia.
                    </p>
                </div>
            </div>

            <div class="col-block item-feature" data-aos="fade-up">
                <div class="item-feature__icon">
                    <i class="icon-shield"></i>
                </div>  
                <div class="item-feature__text">
                    <h3 class="item-title">Integridade</h3>
                    <p>Cardápion digital a todo momento com informações de preço atualizadas de forma instantânea.
                    </p>
                </div>
            </div>

            <div class="col-block item-feature" data-aos="fade-up">
                <div class="item-feature__icon">
                    <i class="icon-lego-block"></i>
                </div>
                <div class="item-feature__text">
                    <h3 class="item-title">Rastreabilidade</h3>
                    <p>Cardápion digital com métricas do que é mais pedido por um determinado cliente.
                    </p>
                </div>
            </div>

            

        </div> <!-- end features -->

        <div class="testimonials-wrap" data-aos="fade-up">

            <div class="row">
                <div class="col-full testimonials-header">
                    <h2 class="display-2">Para Marmitarias</h2>
                </div>
            </div>

            <div class="row testimonials">

                <div class="col-full slick-slider testimonials__slider">

                    <div class="testimonials__slide">
                        <img src="{{asset('vendor/home/images/interrogacao.png')}}" alt="Author image" class="testimonials__avatar">
                        
                        <h3 class="item-title"> Cadastre seu estabeleciomento </h3>

                        <div class="testimonials__author">
                            
                            <span class="testimonials__link">Como está a organização e agilidade do seu delivery?</span>
                        </div>
                    </div> <!-- end testimonials__slide -->

                    <div class="testimonials__slide">
                        <img src="{{asset('vendor/home/images/interrogacao.png')}}" alt="Author image" class="testimonials__avatar">
                        
                        <h3 class="item-title">Cadastre seus clientes</h3>
                        
                        <div class="testimonials__author">
                            
                            <a href="" class="testimonials__link">Você conhece bem os seus clientes? </a>
                        </div>
                    </div> <!-- end testimonials__slide -->

                    <div class="testimonials__slide">
                        <img src="{{asset('vendor/home/images/032-512.png')}}" alt="Author image" class="testimonials__avatar">
                        
                        <h3 class="item-title">Crie seu cardápio</h3>

                        <div class="testimonials__author">
                            <span class="testimonials__link">Envie facilmente aos seus clientes.</span>
                           
                        </div>
                    </div>
                    
                    
                   

                    <div class="testimonials__slide">
                        <img src="{{asset('vendor/home/images/delivery.png')}}" alt="Author image" class="testimonials__avatar">
                        
                        <h3 class="item-title">Cadastre seus entregadores</h3>

                        <div class="testimonials__author">
                            
                            <span  class="testimonials__link">Controle seus pedidos.</span>
                        </div>
                    </div>

                    
                    
                     <!-- end testimonials__slide -->
                    
                </div> <!-- end testimonials__slider -->

            </div> <!-- end testimonials -->

        </div> <!-- end testimonials-wrap -->

    </section> <!-- end s-features -->


    <!-- pricing
    ================================================== -->
    <section id="pricing" class="s-pricing target-section">

        <div class="row section-header align-center" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1">
                   Planos <br> 
                </h1>
                <p class="lead">
                    Et nihil atque ex. Reiciendis et rerum ut voluptate. Omnis molestiae nemo est. 
                    Ut quis enim rerum quia assumenda repudiandae non cumque qui. Amet repellat 
                    omnis ea.
                </p>
            </div>
        </div> <!-- end section-header -->

        <div class="row plans block-1-2 block-m-1-2 block-tab-full stack">

            <div class="col-block item-plan" data-aos="fade-up">
                <div class="item-plan__block"> 

                    <div class="item-plan__top-part">
                        <h3 class="item-plan__title">Free</h3>
                        <p class="item-plan__price">$0</p>
                        <p class="item-plan__per">Forever</p>
                    </div>

                    <div class="item-plan__bottom-part">
                        <ul class="item-plan__features">
                            <li><span>5GB</span> Storage</li>
                            <li><span>10GB</span> Bandwidth</li>
                            <li><span>30</span> Email Accounts</li>
                            <li>Backup & Restore</li>
                        </ul>

                        <a class="btn btn--primary large full-width" href="#0">Get Started</a>
                    </div>  
                
                </div>
            </div> <!-- end item-plan -->

            <div class="col-block item-plan item-plan--popular" data-aos="fade-up">
                <div class="item-plan__block"> 

                    <div class="item-plan__top-part">
                        <h3 class="item-plan__title">Pro Plan</h3>
                        <p class="item-plan__price">$10</p>
                        <p class="item-plan__per">Per Month</p>
                    </div>

                    <div class="item-plan__bottom-part">
                        <ul class="item-plan__features">
                            <li><span>500GB</span> Storage</li>
                            <li><span>Unlimited</span> Bandwidth</li>
                            <li><span>50</span> Email Accounts</li>
                            <li>Backup & Restore</li>
                        </ul>

                        <a class="btn btn--primary large full-width" href="#0">Get Started</a>
                    </div>
                
                </div>
            </div> <!-- end item-plan -->

        </div> <!-- end plans -->

    </section> <!-- end s-pricing -->


    <!-- download
    ================================================== -->
    <section id="download" class="s-download target-section">

        <div class="row section-header align-center" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1">
                    Download
                </h1>
                <p class="lead">
                Visualize os cardápios e promoções dos melhores estabelecimentos de forma ágil e simples.
                </p>
            </div>
        </div> <!-- end section-header -->

        <div class="row">
            <div class="col-full text-center">
                <ul class="download-badges" data-aos="fade-up">
                    <li><a href="#0" title="" class="badge-appstore">App Store</a></li>
                    <li><a href="#0" title="" class="badge-googleplay">Play Store</a></li>
                </ul>
            </div> 
        </div>

        <div class="row download-bottom-image" data-aos="fade-up">

        <img src="{{asset('vendor/home/images/app-screen-1400.png')}}"                   
                sizes="(max-width: 2800px) 100vw, 2800px" 
                alt="App Screenshots">     

           {{-- <img src="{{asset('vendor/home/images/app-screen-1400.png')}}"  --}}
           {{-- srcset= "{{asset('vendor/home/images/app-screen-600.png 600w')}}," --}}
           {{--         "{{asset('vendor/home/images/app-screen-1400.png 1400w')}},"  --}}
           {{--         "{{asset('vendor/home/images/app-screen-2800.png 2800w')}}"  --}}
           {{-- sizes="(max-width: 2800px) 100vw, 2800px"  --}}
            {{-- alt="App Screenshots"> --}}
        </div>

    </section> <!-- end s-download -->


    <!-- footer
    ================================================== -->
    <footer class="s-footer footer">

        <div class="row section-header align-center">
            <div class="col-full">
                <h1 class="display-1">
                Fazer parte do cardAppOn é muito simples.
                </h1>
                <p class="lead">
                Agradecemos sua visita!
                </p>
            </div>
        </div> <!-- end section-header -->

        

        <div class="row footer__bottom">

            <div class="footer__about col-five tab-full left">

                <h4>Sobre Nós</h4>

                <p>
                Por uma vida mais ágil e simples, nosso objetivo é melhorar os estabelecimentos de alimentação com soluções baseadas em cardápios digitais.
                </p>

                <ul class="footer__social">
                    <li><a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                   
                </ul>
            </div>

            <div class="col-five md-seven tab-full right end">
                <div class="row">

                    <div class="footer__site-links col-five mob-full">
                        <h4>Links</h4>

                        <ul class="footer__site-links">
                            <li><a href="#home" class="smoothscroll">Home</a></li>
                            <li><a href="#about" class="smoothscroll">Sobre Nós</a></li>
                            <li><a href="#features" class="smoothscroll">Serviços</a></li>
                            <li><a href="#pricing" class="smoothscroll">Planos</a></li>
                            <li><a href="#download" class="smoothscroll">Download</a></li>
                            
                        </ul>
                    </div>

                    <div class="footer__contact col-seven mob-full">
                        <h4>Contato</h4>

                        <p>
                        Phone: (+63) 555 1212 <br>
                        Fax: (+63) 555 0100
                        </p>
                        <p>
                        Need help or have a question? Contact us at: <br>
                        <a href="mailto:#0" class="footer__mail-link">contato@cardappon.com</a>
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-full ss-copyright">
                <span>&copy; Copyright cardpAppOn 2019</span> 
                
            </div>

        </div> <!-- end footer__bottom -->

        <div class="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"></a>
        </div>

    </footer> <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="{{asset('vendor/home/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('vendor/home/js/plugins.js')}}"></script>
    <script src="{{asset('vendor/home/js//main.js')}}"></script>

</body>