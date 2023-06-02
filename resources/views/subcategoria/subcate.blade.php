@extends('layouts.plantilla');

@section('cont')
    <a href="{{ route('subcategoria.create') }}" class="btn btn-primary">crear subcategoria</a>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">categoria</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subcategoria as $subcategoria)
                <tr>
                    <td>{{ $subcategoria->nombre }}</td>
                    <td>{{ $subcategoria->descripcion }}</td>
                    <td>{{ $subcategoria->cnombre }}</td>
                    <td>
                        <div class=row>
                            <form action="{{ route('subcategoria.destroy', $subcategoria->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">ELIMINAR</button>
                                <a href="{{ route('subcategoria.edit', $subcategoria->id) }}"
                                    class="btn btn-warning btn-sm mr-3">EDITAR</a>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
