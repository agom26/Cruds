<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoriesPost;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Categories::orderBy('created_at','desc')->cursorpaginate(5);
        echo view ('dashboard.categories.index',['categories'=> $category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo view ('dashboard.categories.create',["category"=> new categories()]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoriesPost $request)
    {
        echo"La categoria trae ".$request->title;
        Categories::create($request->validated());
        return redirect('categories/create')->with('status','Muchas gracias la categoria fue creada con éxito');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $category)
    {
        echo view ('dashboard.categories.show',["category"=>$category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $category)
    {
        echo view ('dashboard.categories.edit',["category"=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategoriesPost $request, Categories $category)
    {
        $category->update($request->validated());
        return back()->with('status','Muchas gracias tu categoria fue actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $category)
    {
        $category->delete();
        return back()->with('status','Categoria borrada');
    }
}
