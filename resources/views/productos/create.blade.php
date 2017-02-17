@extends('layouts.app')

@section('content')
<form action="/productos/save" method="post">
  {{ csrf_field() }}
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" name="nombre" value="" class="form-control">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="">Precio</label>
        <input type="text" name="precio" value="" class="form-control">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="">Categoria</label>
        <select class="form-control" name="categoria_id">
          @foreach($categorias as $value)
            <option value="{{ $value->id }}">{{ $value->nombre }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">
        <button type="submit" name="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</form>
@endsection
