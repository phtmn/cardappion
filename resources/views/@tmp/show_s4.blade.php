<!-- <section class="section  bg-primary">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12 ml-auto mr-auto">
        <section class="blogs-3">
          <div class="container">
            <div class="row">
              <div class="col-lg-10 col-md-8 mx-auto">
                <h2 class="title mb-5 text-white">Promoções</h2>
                <div class="card card-blog card-plain blog-horizontal mb-5">
                  <div class="row">
                    <div class="col-md-12 mx-auto">
                      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="https://images.unsplash.com/photo-1457904375453-3e1fc2fc76f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1800&q=80" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="https://images.unsplash.com/photo-1526404801122-40fc40fca08f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2553&q=80" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="https://images.unsplash.com/photo-1524095731963-b4e38d1b3329?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2550&q=80" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</section> -->



<section class="section section-lg ">
   
<div class="container-fluid">
<h2 class="title mb-5 text-dark">Todos os Pratos</h2>   
<!-- <h2 class="title mb-5 text-white">Promoções</h2> -->
      <div class="row d-flex justify-content-center ">
      @forelse ($categories as $category)

        <div class="col-xs-12 "><!--corpo-da-galeria-->
			    <div class="col-xs-12 hovereffect">
                <div>
              
                    <a href="https://images.unsplash.com/photo-1540206395-68808572332f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=881&q=80 " data-fancybox="gallery" data-caption="  " class="">
                    <!-- <img src="https://images.unsplash.com/photo-1540206395-68808572332f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=881&q=80" height="500" width="450" rel="nofollow"> -->
                            <img src = "https://images.unsplash.com/photo-1540206395-68808572332f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=881&q=80" class="img-fluid " alt = "" style="width:355px; height:255px;" />
                            
                    </a>
                </div>  
            </div>
        </div><!--//corpo-da-galeria-->
			{{--	<hr>  --}}
            {{--<div class="col-lg-3 col-md-4 col-xs-6 thumb"> --}}
                {{--<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""--}}
                   {{--data-image="{{$g->aws_url}}"  --}}
                   {{--data-target="#image-gallery"> --}}
                    {{--<img class="" style="width:300px; height:200px;"--}}
                        {{-- src="{{$g->aws_url}}" --}}
                         {{--alt="{{$g->legenda}}"> --}}
                {{--</a> --}}
            {{--</div> --}}
            @empty
            <p class="font-weight-900 text-default">#não há Promoções cadastradas!</p>
            @endforelse                  
  </div><!---/row--->
</div><!--/container-->


<script>
    $('[data-fancybox="gallery"]').fancybox({
    // Options will go here
    });
    $().fancybox({
    selector : '.imglist a:visible'
    }); 
</script>
</section>


@section('css')
<style>
.hovereffect {
width:100%;
height:100%;
float:left;
overflow:hidden;
position:relative;
text-align:center;
cursor:default;

}

.hovereffect .overlay {
width:100%;
height:100%;
position:absolute;
overflow:hidden;
top:0;
left:0;
opacity:0;
background-color:rgba(0,0,0,0.5);
-webkit-transition:all .4s ease-in-out;
transition:all .4s ease-in-out
}

.hovereffect img {
display:block;
/*position:relative;*/
-webkit-transition:all .4s linear;
transition:all .4s linear;
margin: 2px;
}

.hovereffect h2 {
text-transform:uppercase;
color:#fff;
text-align:center;
position:relative;
font-size:17px;
background:rgba(0,0,0,0.6);
-webkit-transform:translatey(-100px);
-ms-transform:translatey(-100px);
transform:translatey(-100px);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
padding:10px;
}

.hovereffect a.info {
text-decoration:none;
display:inline-block;
text-transform:uppercase;
color:#fff;
border:1px solid #fff;
background-color:transparent;
opacity:0;
filter:alpha(opacity=0);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
margin:50px 0 0;
padding:7px 14px;
}

.hovereffect a.info:hover {
box-shadow:0 0 5px #fff;
}

.hovereffect:hover img {
-ms-transform:scale(1.2);
-webkit-transform:scale(1.2);
transform:scale(1.2);
}

.hovereffect:hover .overlay {
opacity:1;
filter:alpha(opacity=100);
}

.hovereffect:hover h2,.hovereffect:hover a.info {
opacity:1;
filter:alpha(opacity=100);
-ms-transform:translatey(0);
-webkit-transform:translatey(0);
transform:translatey(0);
}

.hovereffect:hover a.info {
-webkit-transition-delay:.2s;
transition-delay:.2s;
}

</style>
<!--.:::::::carregamento-da-galleria::::::::.-->
<script src = "// code.jquery.com/jquery-3.2.1.min.js"> </script>
<script src = "jquery.fancybox.min.js"> </script>
@stop

