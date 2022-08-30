<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="/css/css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Mi Primer Crud</title>
    
</head>
<body>
    <h1>Ingreso de Post</h1><br><br>

    <!-- Si hay cualquier tipo de error se generara algo -->
    <!-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">{{$error}}</div>
        @endforeach
    @endif -->
    <!-- Siempre colocar el endif -->

    <main>
        <div class="container">
        <form action="{{route('post.store')}}" method="post">

            @csrf

            @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif

            <section class="margen">
                <label for="" >Titulo</label>
                <input type="text" name="title" >
                @error('title')
                    <small class="text-light">{{ $message }}</small>
                @enderror
                 <br><br>
                
                <label for="" >Url Corta</label>
                <input type="text" name="slug" class="">
                @error('slug')
                    <small class="text-light">{{ $message }}</small>
                @enderror
                <br><br>
                
                <label for="" >Contenido</label>
                <textarea name="content" id="" class=""></textarea>
                @error('content')
                    <small class="text-light">{{ $message }}</small>
                @enderror
                <br><br>

                <label for="" >Descripcion</label>
                <textarea name="description" id="" class=""></textarea>
                @error('description')
                    <small class="text-light">{{ $message }}</small>
                @enderror
                <br><br>
                
                <button type="" >Enviar</button>
            </section>
        </form>
        </div>
        
    </main>

    <footer class="footer">
        <p>Ana Gabriela Ovalle Motta 2022</p>
    </footer>
    
</body>
</html>