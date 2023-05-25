@extends('layouts.plantilla')

@section('content')
    <a href="{{ route('inflable.create') }}" class="btn btn-primary">crear infable</a>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Capacidad</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Valor Alquiler</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Infla as $infla)
                <tr>
                    <td>{{ $infla->Nombre }}</td>
                    <td>{{ $infla->Capacidad }}</td>
                    <td>{{ $infla->Cantidad}}</td>
                    <td>{{ $infla->ValorAlquiler }}</td>
                    <td>
                        <div class=row>
                            <a href="{{ route('inflable.edit', $Infla->id) }}"
                                class="btn btn-warning btn-sm mr-3">EDITAR</a>
                            <form action="{{ route('inflable.destroy', $Infla->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">ELIMINAR</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
