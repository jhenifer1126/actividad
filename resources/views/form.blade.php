@extends('layouts.plantilla')

@section('content')

<form action="{{route('productos.store')}}" method="post">
 @csrf
    <div class="mt-2">
      <label for="exampleInputEmail1">Nombre</label>
      <input type="text" class="form-control" name="Nombre" placeholder="nombre del producto">
    </div>
    <div class="mt-2">
      <label for="exampleInputPassword1">Precio</label>
      <input type="number" class="form-control"  name="Precio" placeholder="Precio del producto">
    </div>
    <div class="mt-2">
        <label for="exampleInputPassword1">Cantidad</label>
        <input type="number" class="form-control"  name="Cantidadl" placeholder="cantidad del producto">
      </div>
      <div class="mt-4">
        <button type="submit" class="btn btn-primary">enviar</button  > 
      
      </div>
  </form>

@endsection
