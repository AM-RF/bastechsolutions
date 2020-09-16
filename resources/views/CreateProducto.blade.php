<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body style="background: #cccc">
        <nav class="navbar navbar-dark bg-dark text-white justify-content-center"> 
            <h5>PRUEBA ALONSO ROJAS BASTECH</h5>
        </nav>
        <div class="container my-5">
            <div class="row justify-content-center">
                @if(isset($productos) && is_object($productos))
                <h3>EDITAR PRODUCTOS</h3>
                @else
                <h3>CREAR PRODUCTOS</h3>
                @endif
            </div>
            <div class="row">
                <div class="col-md-12 ">
                    <div class="d-flex justify-content-end my-2">
                        <a href="{{ route('productos') }}" class="mx-1 btn btn-dark">Producto</a>
                        <a href="{{ route('categorias') }}" class="btn btn-dark">Categorias</a> 
                    </div>
                 </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">      
                    <form  action="{{ isset($productos) ? action('ProductoController@update') : action('ProductoController@save') }}" method="POST"> 
                        {{ csrf_field() }}
                        <input type="hidden" value="@if(isset($productos)) {{ $productos->id }} @endif" name="id">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" value="@if(isset($productos)) {{ $productos->nombre }} @endif" class="form-control" id="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="text" name="precio" value="@if(isset($productos)) {{ $productos->precio }} @endif" class="form-control" id="precio" required>
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="text" name="stock" value="@if(isset($productos)) {{ $productos->stock }} @endif" class="form-control" id="stock" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <input type="text" name="descripcion" value="@if(isset($productos)) {{ $productos->descripcion }} @endif" class="form-control" id="descripcion" required>
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <select id="Categoria" name="categoria" class="form-control">
                                @foreach ($categorias as $categoria)
                                    <option value=" {{$categoria->id}} "> {{$categoria->nombre}} </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-dark">Guardar</button>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>  
    </body>
</html>