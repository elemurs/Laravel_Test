<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Busqueda</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="page-header">
                    <h1>Busqueda de Shows de TV</h1>
                    <form class=form-inline action="{{ route('shows.search') }}" method="GET"> 
                        <input type="text" class="form-control mb-2" name="search" placeholder="Show">
                        <button class="btn btn-primary mx-2 mb-2" type="submit">Buscar</button>
                        <a class="btn btn-info mb-2" href="{{ route('shows.index')}}" role="button">Ver Lista de Shows Guardados</a>
                    </form>
                </div>    
            </div>        
        </div>
    </body>

</html>