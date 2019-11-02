<div class="col-md-6">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Detalhes</h3>
    </div>
    <div class="box-body">
      <div class="form-group">
        {!! Form::label('title', 'Título') !!}
        {!! Form::text('title', old('title'), ['class' => 'form-control']) !!}

        @if($errors->has('title'))
        <span class="help-block text-red">{{ $errors->first('title') }}</span>
        @endif
      </div>

      <div class="form-group">
        {!! Form::label('subtitle', 'Subtítulo') !!}
        {!! Form::text('subtitle', old('subtitle'), ['class' => 'form-control']) !!}

        @if($errors->has('subtitle'))
        <span class="help-block text-red">{{ $errors->first('subtitle') }}</span>
        @endif
      </div>

      <div class="form-group">
        {!! Form::label('body', 'Conteúdo') !!}
        {!! Form::textarea('body', old('body'), ['class' => 'form-control', 'rows' => 5]) !!}

        @if($errors->has('body'))
        <span class="help-block text-red">{{ $errors->first('body') }}</span>
        @endif
      </div>
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Imagem</h3>
    </div>
    <div class="box-body">
      <div class="form-group">
        <label for="imagem">Imagem</label>
        <input type="file" id="imagem" name="imagem">

        <p class="help-block">Apenas Imagens (.jpeg .jpg .png)</p>
      </div>
    </div>
  </div>
</div>
