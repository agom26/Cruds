<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostPost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Post se cambia al modelo que se quiere modificar, en categorias seria Categories y
        $categories */
        $posts=Post::orderBy('created_at','desc')->cursorpaginate(5);
        
        
        /* Es flecha porque es un signo igual en los arreglos, no es flecha de una linea */
        echo view ('dashboard.post.index',['posts'=> $posts]);
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo view ('dashboard.post.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostPost $request)
    {
        /* Antes de guardar en la base de datos ver que si se mandan los mensajes */
        
        echo"El titulo trae ".$request->title;

        Post::create($request->validated());
        /* Refrescar la pagina */
        //return back();
        return redirect('post/create')->with('status','Muchas gracias el post fue creado con éxito');
        /* Request hacia un objeto
            cuando se trabaja con dolar se hace alusion a un metodo
            sin dolar se hace alusion a un nombre
            el title se saco de create.blade en name='title del input'*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        echo view ('dashboard.post.show',["post"=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        echo view ('dashboard.post.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
