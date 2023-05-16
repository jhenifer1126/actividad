<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $Productos = Producto::all();
        return view(('home'),compact('Productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Productos = new Producto();
        $Productos -> Nombre = $request->input('Nombre');
        $Productos -> Precio = $request->input('Precio');
        $Productos -> Cantidadl = $request->input('Cantidadl');
        $Productos -> save();

        return  redirect(route('productos.index'));
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
    public function edit(String $id)
    {
        $Productos = Producto::find($id);
        return view(('edit'),compact('Productos'));
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
        $Productos = Producto::find($id);
        $Productos -> Nombre = $request->input('Nombre');
        $Productos -> Precio = $request->input('Precio');
        $Productos -> Cantidadl = $request->input('Cantidadl');
        $Productos -> save();

        return  redirect(route('productos.index'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $Productos = Producto::find($id);
        $Productos->delete();
        return redirect(route('productos.index'));
    }
}
