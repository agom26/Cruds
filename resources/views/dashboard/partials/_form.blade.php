{{-- 5/09 mando a llamar la sesion flash --}}
@include('dashboard.partials.sesion-flash-status')

<section class="margen">
    <label for="" >Titulo</label>
    <input type="text" name="title" value="{{old('title',$post->title)}}">
    @error('title')
        <small class="text-light">{{ $message }}</small>
    @enderror
     <br><br>
    
    <label for="" >Url Corta</label>
    <input type="text" name="slug" class="" value="{{old('slug',$post->slug)}}">
    @error('slug')
        <small class="text-light">{{ $message }}</small>
    @enderror
    <br><br>
    
    <label for="" >Contenido</label>
    <textarea name="content" id="" >{{old('content',$post->content)}}</textarea>
    @error('content')
        <small class="text-light">{{ $message }}</small>
    @enderror
    <br><br>

    
    <br><br>
    
    <button type="" >Enviar</button>
</section>