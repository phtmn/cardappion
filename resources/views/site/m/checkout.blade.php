<!DOCTYPE html>
<html>

@include('site.layouts._head_m') 
<body class="bg-white">
<section class=" bg-white ">
    @include('site.layouts._nav')

    <div class="main-content  mt-6">
        <div class="header pb-6">
            <div class="container-fluid">
           
            </div>
        </div>


        <div class="container-fluid mt--5">
            <div class="row">
                @include('site.m.checkout._l1')
            </div>

            @include('site.m.checkout._l2')

           @include('site.m.checkout._l3') 

        </div>


    </div>
    </div>
    </div>

    </section>

    <section class="py-8 bg-white ">

    </section>

    @include('site.layouts._footer')

</body>

</html>