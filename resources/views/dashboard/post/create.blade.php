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
    
    {{-- mando a llamar el nav bar --}}
    @include('dashboard.partials.nav-header-main')
    <h1>Ingreso de Post</h1><br><br>

    <main>
        <div class="container">
        <form action="{{route('post.store')}}" method="post">

            @include('dashboard.partials._form')
        </form>
        </div>
        
    </main>

    <footer class="footer">
        <p>Ana Gabriela Ovalle Motta 2022</p>
    </footer>
    
</body>
</html>