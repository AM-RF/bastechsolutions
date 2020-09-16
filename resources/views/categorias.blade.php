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
                <h3>CATEGORIAS</h3>
            </div>
            <div class="row">
                <div class="col-md-12 ">
                    <div class="d-flex justify-content-end my-2">
                        <a href="{{ route('CrearCategoria') }}" class="mx-1 btn btn-dark">Nueva categoria</a>
                        <a href="{{ route('productos') }}" class="btn btn-dark">Productos</a>
                    </div>
                 </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-offset-2 justify-content-center">
                    <div class="panel panel-default">
                        <div class="panel-body table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th class="d-flex justify-content-end">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categorias as $categoria)
                                        <tr>
                                            <td> {{ $categoria->id }} </td>
                                            <td> {{ $categoria->nombre }} </td>
                                            <td class="d-flex justify-content-end">
                                                <a href=" {{ route('EditarCategoria', ['id' => $categoria->id])}} " class="btn btn-info mx-2"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <a href=" {{ route('DeleteCategoria', ['id' => $categoria->id])}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </body>
</html>