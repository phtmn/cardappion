@extends('layouts.admin.master')
@section('cabecalho')
<div class="header bg-black pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <!-- <i class="ni ni-tv-2 text-white"></i>
                    <h3 class="h3 text-white d-inline-block mb-0">Dashboard</h3> -->
                    <h1 class="display-4 text-white d-inline-block mb-0">  <i class="ni ni-tv-2 text-white"></i> Dashboard</h1>
                </div>
                
            </div>
        </div>
    </div>
</div>
@stop

@section('conteudo')

<div class="container-fluid mt--6">
<div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                  
                    <div class="col">
                      <!-- <h5 class="card-title text-uppercase text-muted mb-0">Configurações</h5> -->
                      <span class="h3 font-weight-bold mb-0"><i class="ni ni-settings-gear-65 text-primary"></i> Configurações</span>
                    </div>
                   
                  </div>
                  <!-- <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      
                      <span class="h3 font-weight-bold mb-0"><i class="ni ni-bullet-list-67 text-primary"></i> Produtos</span>
                    </div>
                    
                  </div>
                  <!-- <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                     
                      <span class="h3 font-weight-bold mb-0"> <i class="ni ni-notification-70 text-primary"></i> Promoções</span>
                    </div>
                   
                  </div>
                  <!-- <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      
                      <span class="h3 font-weight-bold mb-0"><i class="ni ni-collection text-primary"></i> Menu</span>
                    </div>
                    
                  </div>
                  <!-- <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



@stop

