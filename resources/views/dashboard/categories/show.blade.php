<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="/css/css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Mi primer Crud</title>
</head>
<body>
    {{-- 5/09 --}}
    {{-- mando a llamar el nav bar --}}
    @include('dashboard.partials.nav-header-main')
    <h1>Ingreso de Categoria</h1><br><br>

    <!-- Si hay cualquier tipo de error se generara algo -->
  
    <!-- Siempre colocar el endif -->

    <main>
        <div class="container">
            <div class="card">
                <div class="card-header">
                  <h2>Ver Categoria</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('categories.store')}}" method="post">

                        @csrf
            
                        <section class="margen">
                            <label for="" class="form-label">Titulo</label>
                            <input type="text" name="title" class="form-control" value="{{$category->title}}">
                            @error('title')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>
                            
                            <label for=""class="form-label" >Url Corta</label>
                            <input type="text" name="slug" class="form-control"value="{{$category->slug}}">
                            @error('slug')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>
                        </section>
                    </form>
                  <a href="{{route('categories.index')}}" class="btn btn-info">Regresar</a>
                </div>
              </div>
        </div>
    </main>
</body>
</html>