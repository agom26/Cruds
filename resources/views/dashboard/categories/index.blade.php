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
    <a href="{{ route('categories.create') }}" class="btn Btn-primary">Crear</a>

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
                    @foreach ($categories as $category)
                        <tr>
                            <td>
                                {{$category->id}}
                            </td>
                        
                            <td>
                                {{$category->title}}
                            </td>
                        
                            <td>
                                {{$category->slug}}
                            </td>
                        
                            <td>
                                {{$category->created_at->format('d-m-Y')}}
                            </td>
                        
                            <td>
                                {{$category->updated_at-> format('d-m-Y')}}
                            </td>
                            
                            <td>
                                <a href="{{route('categories.show',$category->id)}}" class="btn btn-primary">Ver</a>
                                <a href="{{route('categories.edit',$category->id)}}" class="btn btn-secondary">Actualizar</a>
                                <form action="{{route('categories.destroy',$category->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Borrar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                        

                </Thead>
               {{$categories->links()}}
            </table>

            

        </div>
        
    </main>

    <footer class="footer">
        <p>Ana Gabriela Ovalle Motta 2022</p>
    </footer>
    
</body>
</html>