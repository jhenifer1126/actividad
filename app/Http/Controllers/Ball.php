<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bumpersball;
class Ball extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Ball=bumpersball::all();
        return view(('cate.tablaBall'),compact('Ball'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cate.formBall');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Ball = new bumpersball();
        $Ball  -> PersonasJuego = $request->input('PersonasJuego');
        $Ball ->  ValorAlquiler=$request->input('ValorAlquiler');
        $Ball -> save();

        return  redirect(route('ball.index'));
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
        $Ball = bumpersball::findOrfail($id);
        return view(('cate.editBall'),compact('Ball'));
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
        $Ball = bumpersball::findOrfail($id);
        $Ball -> PersonasJuego = $request->input('PersonasJuego');
        $Ball -> ValorAlquiler=$request->input('ValorAlquiler');
        $$Ball -> save();

        return  redirect(route('ball.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Ball = bumpersball::find($id);
        $Ball->delete();
        return redirect(route('ball.index'));
    }
}
