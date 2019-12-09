@extends('super.layouts.theme.app')

@section('content')

<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('super.dashboard.index') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<!-- <div class="container mt--7"> -->
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body table-responsive no-padding">
                   
                </div>
                <div class="table table-hover">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="">ID</th>
                                <th scope="col" class="">Nome do Estabelecimento</th>
                                <th scope="col" class="">Token</th>
                                <th scope="col" class="">Plano</th>
                                <th scope="col" class="">Ativo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $d)
                            <tr>
                                <td>
                                     {{$d->id}}
                                </td>
                                <td>
                                {{$d->name}}
                                </td>
                                <td>
                                <a href="{{ config('app.url') }}/m/{{$d->token}}" target="_blank">{{ config('app.url') }}/m/{{$d->token}}</a>
                                
                                </td>
                                <td>
                                {{$d->plan}}  
                                </td>
                                <td>
                                {{$d->active}}                                
                                </td>
                            </tr>
                            @empty
                            <p class="text-warning font-weight-bold 900" style="text-indent: 25px;">Você ainda não cadastrou nenhum projeto! <span></span></p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!-- </div> -->
</section>

@stop
