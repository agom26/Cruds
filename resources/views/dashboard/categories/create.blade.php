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

    <title>Categorias</title>
</head>
<body>
    @include('dashboard.partials.nav-header-main')
    <h1>Ingreso de Categorias</h1><br><br>

    <!-- Si hay cualquier tipo de error se generara algo -->
    <!-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">{{$error}}</div>
        @endforeach
    @endif -->
    <!-- Siempre colocar el endif -->

    <main>
        <div class="container">
        <form action="{{route('categories.store')}}" method="post">

            @include('dashboard.partials._formC')
        </form>
        </div>
        
    </main>


    <footer class="footer">
        <p>Ana Gabriela Ovalle Motta 2022</p>
    </footer>

</body>
</html>