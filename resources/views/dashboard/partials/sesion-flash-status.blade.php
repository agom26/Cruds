{{-- 5/09 --}}
@csrf

            @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif


            {{-- error en grande y en toda la pantalla --}}
            {{--    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">{{$error}}</div>
                        @endforeach
                    @endif  --}}