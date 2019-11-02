@extends('super.layouts.theme.app')

@section('content')

<section class="content-header">
  <h1>
    Blog
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('super.dashboard.index') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Blog</li>
  </ol>
</section>

<section class="content">
  {!! Form::open(['route' => ['super.blog.store'], 'files' => true]) !!}
  <div class="row">
    <div class="col-md-2">
      <button type="submit" class="btn btn-primary btn-block margin-bottom">Salvar</button>
    </div>
  </div>

  <div class="row">
    @include('super.blog._form')
  </div>
  {!! Form::close() !!}

</section>

@stop
