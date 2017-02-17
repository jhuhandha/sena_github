@extends('layouts.app')


@section('content')
{{ Form::model($producto, ['url' => '/productos/update']) }}

  <input type="hidden" name="id" value="{{ $producto->id }}">

  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="">Nombre</label>
        {{ Form::text('nombre', null, ['class'=>'form-control']) }}
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="">Precio</label>
        {{ Form::text('precio', null, ['class'=>'form-control']) }}
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="">Categoria</label>
        {{ Form::select('categoria_id', $categorias, null, ['class'=>'form-control']) }}
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">
        <button type="submit" name="button" class="btn btn-warning">Modificar</button>
      </div>
    </div>
  </div>
{!! Form::close() !!}
@endsection
