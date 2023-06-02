@extends('layouts.plantilla');

@section('cont')

<a href="{{ route('categoria.create') }}" class="btn btn-primary">crear categoria</a>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria).
                <tr>
                    <td>{{ $categoria->nombre }}</td>
                    <td>{{ $categoria->descripcion }}</td>
                    <td>
                        <div class=row>

                            <form action="{{ route('categoria.destroy', $categoria->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">ELIMINAR</button>
                                <a href="{{ route('categoria.edit', $categoria->id) }}"
                                class="btn btn-warning btn-sm mr-3">EDITAR</a>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
