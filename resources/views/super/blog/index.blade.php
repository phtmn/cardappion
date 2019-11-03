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
            <tr id="tr-{{ $post->id }}">
              <td>
                <img src="{{ url("{$post->image}") }}" height="30" width="30" />
              </td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->subtitle }}</td>
              <td>{{ $post->created_at->format('d/m/Y') }}</td>
              <td>
                <a href="{{ route('super.blog.edit', ['id' => $post->id]) }}" class="btn btn-primary btn-xs"
                  data-toggle="tooltip" data-placement="top" title="Editar">
                  <i class="fa fa-fw fa-pencil"></i>
                </a>

                <a data-href="{{ route('super.blog.destroy', ['id' => $post->id]) }}" data-id="{{ $post->id }}"
                  data-msg="Realmente deseja deletar esse Post?" class="_btnDelete btn btn-danger btn-xs"
                  data-toggle="tooltip" data-placement="top" title="Excluir">
                  <i class="fa fa-fw fa-trash-o"></i>
                </a>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  var _delete = document.getElementsByClassName("_btnDelete");
  for (i = 0; i < _delete.length; i++) {
    _delete[i].addEventListener("click", e => {
      swalDelete(e.currentTarget.dataset);
    });
  }

  function swalDelete(data) {
    console.log(data);
  swal({
    title: "Você está certo disso?",
    text: data.msg,
    icon: "warning",
    buttons: true,
    dangerMode: true
  }).then(willDelete => {
    if (willDelete) {
      axios
        .delete(data.href, data)
        .then(response => {
          var tr = document.querySelector(`#tr-${data.id}`);
          tr.style.display = "none";
          return swal("Bom Trabalho!", response.data.message, "success");
        })
        .catch(error => {
          return swal("Algo de errado aconteu!", error.message, "error");
        });
    }
  });
}
</script>

@stop
