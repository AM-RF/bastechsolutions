<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Categoria;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::All();
        return view('productos')->with('productos', $productos);
    }

    public function crear()
    {
        //$productos = Producto::All();
        $categorias = Categoria::All();
        return view('CreateProducto',[
            //'productos' => $productos,
            'categorias' => $categorias
        ]);
    }

    public function save(Request $request)
    {
        $producto = Producto::insert(array(
            'nombre' => $request->input('nombre'),
            'precio' => $request->input('precio'),
            'stock' => $request->input('stock'),
            'descripcion' => $request->input('descripcion'),
            'categoria_id' => $request->input('categoria')
        ));

        $productos = Producto::All();
        return view('productos')->with('productos', $productos);
    }

    public function editar($id)
    {
        $productos = Producto::find($id);
        $categorias = Categoria::All();
        return view('CreateProducto',[
            'productos' => $productos,
            'categorias' => $categorias
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $producto = Producto::where('id' , $id)->update(array(
            'nombre' => $request->input('nombre'),
            'precio' => $request->input('precio'),
            'stock' => $request->input('stock'),
            'descripcion' => $request->input('descripcion'),
            'categoria_id' => $request->input('categoria')
        )); 

        $productos = Producto::All();
        return view('productos')->with('productos', $productos);
    }

    public function delete($id)
    {
        $productos = Producto::where('id',$id)->delete();
        return redirect()->route('productos');
    }
}
