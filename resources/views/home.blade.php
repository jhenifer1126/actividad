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
      @foreach ($Productos as $Producto)
      <tr>
        <td>{{$Producto->Id}}</td>
        <td>{{$Producto->Nombre}}</td>
        <td>{{$Producto->Cantidadl}}</td>
        <td>{{$Producto->Precio}}</td>
        <td>
            <form action="{{route('productos.destroy',$Producto->Id)}}" method="POST">
                @csrf
                @method('DELETE')
              <a href="{{route('productos.edit', $Producto->Id)}}" class="btn btn-warning btn-sm mr-3">EDITAR</a>
              <button type="submit" class="btn btn-danger btn-sm">ELIMINAR</button>
            </form>
          </td>
      </tr> 
      @endforeach
     </tbody>
  </table>
@endsection
