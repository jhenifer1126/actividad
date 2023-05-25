<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\brincabrinca;

class Brinca extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Brinca=brincabrinca::all();
        return view(('cate.tablaBrinca'),compact('Brinca'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cate.formBrinca');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Brinca = new brincabrinca();
        $Brinca  -> Capacidad = $request->input('Capacidad');
        $Brinca -> Cantidad = $request->inpùt('Cantidad');
        $Brinca ->  ValorAlquiler=$request->input('ValorAlquiler');
        $Brinca -> save();

        return  redirect(route('brinca.index'));
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
        $Brinca = brincabrinca::findOrfail($id);
        return view(('cate.editBrinca'),compact('Brinca'));
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
        $Brinca = bumpersball::findOrfail($id);
        $Brinca -> Capacidad = $request->input('Capacidad');
        $Brinca -> Cantidad =$request->input('Cantidad');
        $Brinca -> ValorAlquiler=$request->input('ValorAlquiler');
        $Brinca -> save();

        return  redirect(route('brinca.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Brinca = brincabrinca::find($id);
        $Brinca->delete();
        return redirect(route('brinca.index'));
    }
}
