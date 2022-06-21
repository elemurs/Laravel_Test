<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $show->name}}</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="page-header">
                    <h1>{{ $show->name}}</h1>
                    <img src="{{ $show->img }}" class="rounded float-left mr-3" alt="..." style="width:50%">
                    <p>{!! $show->summary !!}</p>
                </div>    
            </div>        
        </div>
    </body>

</html>