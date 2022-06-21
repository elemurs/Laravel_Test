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
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status')}}
                        </div>                    
                    @endif

                    @if(session('issue'))
                        <div class="alert alert-warning" role="alert">
                            {{ session('issue')}}
                        </div>                    
                    @endif
                    
                    <ul class="list-group">
                        
                        @foreach ($shows as $show)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="{{ $show['show']['image']['medium'] }}" alt="" style="height: 140px" class="rounded" />
                                    <div class="ms-2 mx-2">
                                        <h5 class="fw-bold mb-2">{{ $show['show']['name'] }}</h5>
                                        <p class="text-muted mb-0">{!! $show['show']['summary'] !!}</p>
                                    </div>
                                    <form class=mx-2 action="{{ route('shows.store', $show['show'])}}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <button class = "btn btn-primary" type="submit" onclick="return confirm('Agregar este show a la base de datos?')">Agregar</button>
                                    </form>
                                </div>   
                            </li>
                        @endforeach
                        
                    </ul>
                    
                </div>    
            </div>        
        </div>
    </body>

</html>