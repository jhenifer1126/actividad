<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\subcategoria;
use Spatie\LaravelIgnition\Solutions\SolutionProviders\RunningLaravelDuskInProductionProvider;


class ProductoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('can:productos.index')->only('index');
        $this->middleware('can:productos.edit')->only('edit','update');
        $this->middleware('can:productos.create')->only('create','store');
        $this->middleware('can:productos.destroy')->only('destroy');


    }

    public function index()
    {
       $Productos = Producto::select('c.nombre as cnombre','sub.nombre as subnombre','productos.*')
                              ->join('categorias as c', 'productos.categorias_id','c.id')
                              ->join('subcategorias as sub', 'productos.subcategorias_id','sub.id')
                              ->where('productos.estado',1) ->get();
        return view(('produ.productos'),compact('Productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::where('categorias.estado',1)->get();
        $subcategorias=subcategoria::where('subcategorias.estado',1)->get();
        return view('produ.form',compact('categorias','subcategorias'));
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

        $Productos = new Producto();
        $Productos -> nombre = $request->input('nombre');
        $Productos -> precio = $request->input('precio');
        $Productos -> cantidadl = $request->input('cantidadl');
        $Productos-> estado=1;
        $Productos-> categorias_id=$request->input('categoria');
        $Productos-> subcategorias_id =$request->input('subcategoria');
        $Productos->file = $filename;
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
    public function edit($id)
    {
        $categorias = Categoria::where('categorias.estado',1)->get();
        $subcategorias=subcategoria::where('subcategorias.estado',1)->get();
        $Productos = Producto::findOrfail($id);
        return view(('produ.edit'),compact('Productos','categorias','subcategorias'));
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
        $Productos = Producto::findOrfail($id);
        $Productos -> nombre = $request->input('nombre');
        $Productos -> precio = $request->input('precio');
        $Productos -> cantidadl = $request->input('cantidadl');
        $Productos-> categorias_id=$request->input('categoria');
        $Productos-> subcategorias_id =$request->input('subcategoria');
        if ($request->hasFile('file')) {
            $name = $request->file('file')->getClientOriginalName();
            $destino = "img";
            $filename = $request->file('file')->move($destino, $name);
            $Productos->file = $filename;
        }
        $Productos -> save();

        return  redirect(route('productos.index'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Productos = Producto::find($id);
        $Productos->estado=0;
        $Productos->save();
        return $listo="listo";
    }
}
