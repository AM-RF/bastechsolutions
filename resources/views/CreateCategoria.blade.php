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
                @if(isset($categorias) && is_object($categorias))
                <h3>EDITAR CATEGORIAS</h3>
                @else
                <h3>CREAR CATEGORIAS</h3>
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
                    <form  action=" {{  isset($categorias) ?  action('CategoriaController@update') : action('CategoriaController@save')}} " method="POST"> 
                        {{ csrf_field() }}
                        <input type="hidden" value="@if(isset($categorias)) {{ $categorias->id }} @endif" name="id">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" value="@if(isset($categorias)) {{ $categorias->nombre }} @endif" class="form-control" id="nombre" required>
                        </div>
                        <button type="submit" class="btn btn-dark">Guardar</button>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>  
    </body>
</html>