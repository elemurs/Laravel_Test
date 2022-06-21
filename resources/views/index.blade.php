<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shows</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="page-header">
                    <h1>Shows en Base de Datos</h1>
                </div>  
            </div>
            @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status')}}
                </div>                    
            @endif
            <div class="row">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Sinopsis</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($shows as $show)
                        <tr>
                            <td>{{ $show->id}}</td>
                            <td><span class="text-primary">{{ $show->name}}</span></td>
                            <td><span class="text-primary">{!! $show->summary !!}</span></td>

                            <td class="td-actions d-flex">
                                <div class="btn-group mr-2">
                                    <a href="{{ route('shows.show', $show) }}" class="btn btn-primary">Ver</a>                                        
                                    <a href="{{ route('shows.edit', $show) }}" class="btn btn-primary">Editar</a> 
                                </div>
                                <form action="{{ route('shows.destroy', $show)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class = "btn btn-danger" type="submit" onclick="return confirm('Estas seguro de eliminar este show?')">Eliminar</button>
                                </form>                                                                      
                            </td>
                        </tr>
                    @endforeach 
                    </tbody>
                </table> 
            </div>       
        </div>
    </body>

</html>