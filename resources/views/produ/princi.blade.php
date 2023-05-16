@extends('layouts.plantilla')

@section('content')

<a href="{{route('productos.create')}}" class="btn btn-success mb-4">CREAR</a>

<table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Cantidadl</th>
          <th scope="col">Precio</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($productos as $producto)
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