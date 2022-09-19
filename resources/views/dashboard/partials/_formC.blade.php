@include('dashboard.partials.sesion-flash-status')

            <section class="margen">
                <label for="" >Titulo</label>
                <input type="text" name="title" value="{{old('title',$category->title)}}" >
                @error('title')
                    <small class="text-light">{{ $message }}</small>
                @enderror
                 <br><br>
                
                <label for="" >Url Corta</label>
                <input type="text" name="slug" class="" value="{{old('slug',$category->slug)}}">
                @error('slug')
                    <small class="text-light">{{ $message }}</small>
                @enderror
                <br><br>
                <button type="" >Enviar</button>
            </section>