<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    public function _construct(){

    $this->middleware('can:categoria.index')->only('index');
    $this->middleware('can:categoria.edit')->only('edit','update');
    $this->middleware('can:categoria.create')->only('create','store');
    $this->middleware('can:categoria.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
*/
    public function index()
    {
        $categorias=Categoria::where('estado',1)->get();
        return view('categorias.catego',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request['file']->getClientOriginalName();
        $destino = "img";
        $filename = $request['file']->move($destino, $name);

        $categorias=new Categoria();
        $categorias->nombre=$request->input('nombre');
        $categorias->descripcion=$request->input('descripcion');
        $categorias->estado=1;
        $categorias->file = $filename;
        $categorias->save();

        return  redirect(route('categoria.index'));
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
        $categorias=Categoria::findOrfail($id);
        return view('categorias.edit',compact('categorias'));
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
        $categorias=Categoria::findOrfail($id);
        $categorias->nombre=$request->input('nombre');
        $categorias->descripcion=$request->input('descripcion');
        $categorias->estado=1;
        if ($request->hasFile('file')) {
            $name = $request->file('file')->getClientOriginalName();
            $destino = "img";
            $filename = $request->file('file')->move($destino, $name);
            $categorias->file = $filename;
        }
        $categorias->save();

        return  redirect(route('categoria.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorias =Categoria::find($id);
        $categorias->estado=0;
        $categorias->save();
        return $listo="listo";
    }
}
