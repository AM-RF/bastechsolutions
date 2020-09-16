<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Producto;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::All();
        return view('categorias')->with('categorias', $categorias);
    }

    public function crear()
    {
        return view('CreateCategoria');
    }

    public function save(Request $request)
    {
        $categoria = Categoria::insert(array(
            'nombre' => $request->input('nombre'),
        ));
        $categorias = Categoria::All();
        return view('categorias')->with('categorias', $categorias);
    }

    public function editar($id)
    {
        $categorias = Categoria::find($id);
        return view('CreateCategoria',[
            'categorias' => $categorias
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $categoria = Categoria::where('id' , $id)->update(array(
            'nombre' => $request->input('nombre'),
        )); 

        $categorias = Categoria::All();
        return view('categorias')->with('categorias', $categorias);
    }

    public function delete($id)
    {
        $categorias = Categoria::where('id',$id)->delete();
        $productos = Producto::where('categoria_id', $id)->delete();
        return redirect()->route('categorias');
    }
}
