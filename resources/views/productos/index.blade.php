@extends('layouts.app')

@section('content')
  <h1>Productos</h1>
  <table id="tblProductos" class="table">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoria</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>

    </tbody>
  </table>


@endsection

@section('script')

  <script type="text/javascript">
    $('#tblProductos').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/productos/get',
        columns: [
            {data: 'nombre', name: 'productos.nombre'},
            {data: 'precio', name: 'productos.precio'},
            {data: 'categoria', name: 'categoria.nombre'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
  </script>

@endsection
