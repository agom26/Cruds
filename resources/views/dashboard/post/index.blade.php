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
    {{-- 5/09 --}}
    {{-- mando a llamar el nav bar --}}
    @include('dashboard.partials.nav-header-main')
    <a href="{{ route('post.create') }}" class="btn Btn-primary">Crear</a>

    <!-- Si hay cualquier tipo de error se generara algo -->
  
    <!-- Siempre colocar el endif -->

    <main>
        <div class="container">
            <table class="table table-striped">
                <Thead>
                    <body>
                        <tr>
                            <td>
                                Id
                            </td>
                        
                            <td>
                                Titulo
                            </td>
                        
                            <td>
                                Ruta
                            </td>
                        
                            <td>
                                Creacion
                            </td>
                        
                            <td>
                                Actualizado
                            </td>

                            <td>
                                Acciones
                            </td>
                        </tr>
                        
                    </body>

                    {{-- recorrer arreglo --}}
                    {{-- la variable posts que se manda aqui se va a llamar post --}}
                    @foreach ($posts as $post)
                        <tr>
                            <td>
                                {{$post->id}}
                            </td>
                        
                            <td>
                                {{$post->title}}
                            </td>
                        
                            <td>
                                {{$post->slug}}
                            </td>
                        
                            <td>
                                {{$post->created_at->format('d-m-Y')}}
                            </td>
                        
                            <td>
                                {{$post->updated_at-> format('d-m-Y')}}
                            </td>

                            <td>
                                <a href="{{route('post.show',$post->id)}}" class="btn btn-primary">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                        

                </Thead>
                {{$posts->links()}}
            </table>

            

        </div>
        
    </main>

    <footer class="footer">
        <p>Ana Gabriela Ovalle Motta 2022</p>
    </footer>
    
</body>
</html>