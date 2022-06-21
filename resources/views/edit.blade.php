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
                    <h1>Editar: {{ $show->name}}</h1>
                </div> 
                @if(session('status'))
                    <div class="container">
                        <div class="alert alert-success" role="alert">
                            {{ session('status')}}
                        </div>  
                    </div>                  
                @endif
                <div class="container">
                    <div class="">
                        <form method="POST" action="{{ route ('shows.update', $show)  }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="">Nombre</label>
                                
                                <input class="form-control"required type="text" name="name" value="{{ old('name', $show->name) }}">
                                
                            </div>
                            <div class="form-group row">
                                <label class="">Api Url</label>
                                
                                <input class="form-control"required type="text" name="url" value="{{ old('url', $show->url) }}">
                                
                            </div>
                            <div class="form-group row">
                                <label class="">Tipo</label>
                                
                                <input class="form-control"type="text" name="type" value="{{ old('type', $show->type) }}">
                                
                            </div>
                            <div class="form-group row">
                                <label class="">Idioma</label>
                                
                                <input class="form-control"type="text" name="language" value="{{ old('language', $show->language) }}">
                                
                            </div>
                            <div class="form-group row">
                                <label class="">Estado</label>
                                
                                <input class="form-control"type="text" name="status" value="{{ old('status', $show->status) }}">
                                
                            </div>
                            <div class="form-group row">Runtime</label>
                                
                                <input class="form-control"type="number" name="runtime" value="{{ old('runtime', $show->runtime) }}">
                                
                            </div>
                            <div class="form-group row">Weigth</label>
                                
                                <input class="form-control"type="number" name="weight" value="{{ old('weight', $show->weight) }}">
                                
                            </div>

                            <div class="form-group row">Estreno</label>
                                
                                <input class="form-control"type="date" name="premiered" value="{{ old('premiered', $show->premiered) }}">
                                
                            </div>

                            <div class="form-group row">Final</label>
                                
                                <input class="form-control"type="date" name="ended" value="{{ old('ended', $show->ended) }}">
                                
                            </div>

                            <div class="form-group row">
                                <label class="">Sitio Web</label>
                                
                                <input class="form-control"type="text" name="officialSite" value="{{ old('officialSite', $show->officialSite) }}">
                                
                            </div>
                            
                            <div class="form-group row">
                                <label class="">Promedio Nota</label>
                                
                                <input class="form-control"type="float" name="averageRate" value="{{ old('averageRate', $show->averageRate) }}">
                                
                            </div>

                            <div class="form-group row">
                                <label class="">Sinopsis</label>
                                
                                <textarea class="form-control" type="text" name="summary" value="">{{ old('summary', $show->summary) }}</textarea>
                                
                            </div>
                            <div class="form-group row">
                                <label class="">Imagen</label>
                                
                                <input class="form-control"required type="text" name="img" value="{{ old('img', $show->img) }}">
                                
                            </div>
                            
                            <div>
                                @method('PUT')
                                <button class="btn btn-primary" type="submit">Actualizar Show</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>        
        </div>
    </body>

</html>