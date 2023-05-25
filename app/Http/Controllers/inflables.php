<?php

namespace App\Http\Controllers;
use App\Models\infable;
use Illuminate\Http\Request;

class inflables extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Infla=infable::all();
        return view(('cate.tablainfla'),compact('Infla'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('cate.forminfla');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Infla = new infable();
        $Infla -> Nombre = $request->input('Nombre');
        $Infla  -> Capacidad = $request->input('Capacidad');
        $Infla  -> Cantidad = $request->input('Cantidad');
        $Infla ->  ValorAlquiler=$request->input('ValorAlquiler');
        $Infla -> save();

        return  redirect(route('inflable.index'));
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
        $Infla = infable::findOrfail($id);
        return view(('cate.editInfla'),compact('Infla'));
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
        $Infla = infable::findOrfail($id);
        $Infla -> Nombre = $request->input('Nombre');
        $Infla -> Capacidad = $request->input('Capacidad');
        $Infla -> Cantidad = $request->input('Cantidad');
        $Infla -> ValorAlquiler=$request->input('ValorAlquiler');
        $$Infla -> save();

        return  redirect(route('inflable.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Infla = infable::find($id);
        $Infla->delete();
        return redirect(route('inflable.index'));
    }
}
