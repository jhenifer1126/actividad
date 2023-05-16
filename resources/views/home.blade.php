@extends('layouts.plantilla')

@section('content')

<a href="{{route('productos.create')}}" class="btn btn-primary">crear producto</a>
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Precio</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($Productos as $producto)
        <tr>
          <td>{{$producto->Id}}</td>
          <td>{{$producto->Nombre}}</td>
          <td>{{$producto->Cantidad}}</td>
          <td>{{$producto->Precio}}</td>
          <td>
            <form action="{{route('productos.destroy', $producto->id)}}" method="POST">
              @csrf
              @method('DELETE')
            <a href="{{route('productos.edit',$producto->id)}}" class="btn btn-primary btn-sm mr-3">EDITAR</a>
            <button type="submit" class="btn btn-danger btn-sm">ELIMINAR</button>
            </form>
          </td>
        </tr>
        @endforeach
        
      </tbody>
  </table>
@endsection
