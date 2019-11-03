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

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-2">
      <a href="{{ route('super.blog.create') }}" class="btn btn-primary btn-block margin-bottom">Adicionar</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th></th>
              <th>Título</th>
              <th>Subtítulo</th>
              <th>Criado em</th>
              <th></th>
            </tr>
            @foreach ($posts as $post)
            <tr>
              <td>
                <img src="{{ url("{$post->image}") }}" style="height: 20px;" />
              </td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->subtitle }}</td>
              <td>{{ $post->created_at->format('d/m/Y') }}</td>
              <td></td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

@stop
