<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\subcategoria;
use App\Models\Categoria;

class SubcategoriasController extends Controller
{
    public function _construct(){

        $this->middleware('can:subcategoria.index')->only('index');
        $this->middleware('can:subcategoria.edit')->only('edit','update');
        $this->middleware('can:subcategoria.create')->only('create','store');
        $this->middleware('can:subcategoria.destroy')->only('destroy');
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategoria=subcategoria::select('c.nombre as cnombre','subcategorias.*')
                                  ->join('categorias as c','subcategorias.categorias_id','c.id')
                                  ->where('subcategorias.estado',1)->get();
        return view('subcategoria.subcate',compact('subcategoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria=Categoria::where('estado',1)->get();
        return view('subcategoria.form',compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subcategorias = new subcategoria();
        $subcategorias->nombre = $request->input('nombre');
        $subcategorias->descripcion = $request->input('descripcion');
        $subcategorias->estado = 1;
        $subcategorias->categorias_id = $request->input('categoria');
        $subcategorias->save();

        return redirect(route('subcategoria.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria=Categoria::where('estado',1)->get();
        $subcategoria=subcategoria::findOrfail($id);
        return view('subcategoria.edit',compact('subcategoria','categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subcategoria=subcategoria::FindOrfail($id);
        $subcategoria->nombre=$request->input('nombre');
        $subcategoria->descripcion=$request->input('descripcion');
        $subcategoria->categorias_id=$request->input('categoria');
        $subcategoria->save();

        return  redirect(route('subcategoria.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategoria =subcategoria::find($id);
        $subcategoria->estado=0;
        $subcategoria->save();
        return redirect(route('subcategoria.index'));
    }
}
