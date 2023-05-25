@extends('layouts.plantilla')

@section('cont')
    <a href="{{ route('productos.create') }}" class="btn btn-primary">crear producto</a>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Productos as $Producto)
                <tr>
                    <td>{{ $Producto->Nombre }}</td>
                    <td>{{ $Producto->Cantidadl }}</td>
                    <td>{{ $Producto->Precio }}</td>
                    <td>
                        <div class=row>
                            
                            <form action="{{ route('productos.destroy', $Producto->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">ELIMINAR</button>
                                <a href="{{ route('productos.edit', $Producto->id) }}"
                                class="btn btn-warning btn-sm mr-3">EDITAR</a>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
