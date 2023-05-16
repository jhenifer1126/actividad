@extends('layouts.plantilla')

@section('content')
@csrf
<form>
    <div class="form-group">
      <label for="exampleInputEmail1">Nombre</label>
      <input type="text" class="form-control" name="Nombre" placeholder="nombre del producto">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Precio</label>
      <input type="number" class="form-control"  name="Precio" placeholder="Precio del producto">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Cantidad</label>
        <input type="number" class="form-control"  name="Cantidad" placeholder="cantidad del producto">
      </div>
    <button type="submit" class="btn btn-primary">enviar</button>
  </form>

@endsection
