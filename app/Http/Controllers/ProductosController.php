<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Producto;
use App\Model\Categoria;
use Notify;
use Datatables;

class ProductosController extends Controller
{
    public function index(){
      return view("productos.index");
    }

    public function getDate(Request $request){
      $productos = Producto::select('productos.*', 'categoria.nombre as categoria')
                    ->join('categoria','categoria.id','=','productos.categoria_id')
                    ->get();

      return Datatables::of($productos)
      ->addColumn('action', function ($user) {
          return '<a href="/productos/edit/'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
      })
      ->make(true);
    }

    public function create(){
      $categorias = Categoria::all();
      return view('productos.create', compact('categorias'));
    }

    public function save(Request $request){
      $input = $request->all();
      Producto::create($input);
      Notify::success("Se guardo","Felicitaciones");
      return redirect('/productos');
    }


    public function edit($id){

      $categorias = Categoria::pluck('nombre','id');

      $producto = Producto::find($id);
      if($producto == null){
        Notify::warning('No se encontraron datos','Espera');
        return redirect('/productos');
      }
      return view('productos.edit', compact('producto', 'categorias'));
    }


    public function update(Request $request){
      $input = $request->all();
      $producto = Producto::find($input["id"]);
      if($producto == null){
        Notify::warning('No se encontraron datos','Espera');
        return redirect('/productos');
      }
      $producto->update($input);
      Notify::success('Modifico', 'Hola');
      return redirect('/productos');
    }
}
