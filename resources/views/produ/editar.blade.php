@extends('layouts.plantilla')


@section('content')

<form action="{{route('productos.update',$producto->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3 mt-3">
      <label for="" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required min="1" max="50" value="{{$producto->nombre}}">
    </div>
    <div class="mt-3">
      <label for="" class="form-label">Cantidad</label>
      <input type="number" class="form-control" id="cantidad" name="cantidad" required value="{{$producto->cantidad}}">
    </div>
    <div class="mt-3">
      <label for="" class="form-label" >Precio</label>
      <input type="number" class="form-control" id="precio" name="precio" required value="{{$producto->precio}}">
    </div>
    <div class="mt-5">
        <button type="submit" class="btn btn-success mr -4 ">GUARDAR</button>
        <a href="{{route('productos.index')}}" class="btn btn-danger">CANCELAR</a>
    </div>

  </form>

@endsection