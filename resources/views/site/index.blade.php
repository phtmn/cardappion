@extends('layouts.site')

@section('conteudo_principal')
<div class="page-header page-header-small">
    <div class="page-header-image" data-parallax="true" style="background-image: url('{{asset('vendor/site/assets/img/bg6.jpg')}}');">
    </div>
    <div class="content-center">
        <div class="container">
            <h1 class="title">CardAppON - Crie cardapios digitais</h1>
            <div class="text-center">
                <a href="#" class="btn btn-primary btn-icon btn-round">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a href="#" class="btn btn-primary btn-icon btn-round">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="btn btn-primary btn-icon btn-round">
                    <i class="fab fa-google-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="section section-about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h2 class="title">O que é o cardapiON?</h2>
                <h5 class="description">According to the National Oceanic and Atmospheric Administration, Ted, Scambos, NSIDClead scentist, puts the potentially record low maximum sea ice extent tihs year down to low ice extent in the Pacific and a late drop in ice extent in the Barents Sea.</h5>
            </div>
        </div>
    </div>
</div>
<div class="section section-team text-center">
    <div class="container">
        <h2 class="title">Nosso Time</h2>
        <div class="team">
            <div class="row">
                <div class="col-md-4">
                    <div class="team-player">
                        <img src="{{asset('vendor/site/assets/img/avatar.jpg')}}" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                        <h4 class="title">Romina Hadid</h4>
                        <p class="category text-primary">Model</p>
                        <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                            <a href="#">links</a> for people to be able to follow them outside the site.</p>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-twitter"></i></a>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-instagram"></i></a>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-facebook-square"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-player">
                        <img src="{{asset('vendor/site/assets/img/ryan.jpg')}}" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                        <h4 class="title">Ryan Tompson</h4>
                        <p class="category text-primary">Designer</p>
                        <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                            <a href="#">links</a> for people to be able to follow them outside the site.</p>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-twitter"></i></a>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-player">
                        <img src="{{asset('vendor/site/assets/img/eva.jpg')}}" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                        <h4 class="title">Eva Jenner</h4>
                        <p class="category text-primary">Fashion</p>
                        <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                            <a href="#">links</a> for people to be able to follow them outside the site.</p>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-google-plus"></i></a>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-youtube"></i></a>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section section-contact-us text-center">
    <div class="container">
        <h2 class="title">Entre em Contato?</h2>
        <p class="description">Sua mensagem é muito importante para nós.</p>
        <div class="row">
            <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
                <div class="input-group input-lg">
                    <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons users_circle-08"></i>
                </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Seu nome...">
                </div>
                <div class="input-group input-lg">
                    <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons ui-1_email-85"></i>
                </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Seu email...">
                </div>
                <div class="textarea-container">
                    <textarea class="form-control" name="name" rows="4" cols="80" placeholder="Escreva algo pra nós..."></textarea>
                </div>
                <div class="send-button">
                    <a href="#pablo" class="btn btn-primary btn-round btn-block btn-lg">Send Message</a>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer footer-default">
    <div class="container">
        <nav>
            <ul>
                <li>
                    <a href="#">
                        CardapiON
                    </a>
                </li>
                <li>
                    <a href="#">
                        Sobre nós
                    </a>
                </li>
                <li>
                    <a href="#">
                        Blog
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright" id="copyright">
            &copy;
            <script>
                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by
            <a href="#" target="_blank">Quem ama tecnologia</a>. Coded by
            <a href="#" target="_blank">Laravel</a>.
        </div>
    </div>
</footer>

@endsection