@extends('layouts.plantilla')

@section('cont')
    <a href="{{ route('inflable.create') }}" class="btn btn-primary">crear nuevo registro</a>
    <table class="table table-dark">
        <thead>
            <tr>
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

                            <form action="{{ route('inflable.destroy', $infla->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">ELIMINAR</button>
                                <a href="{{ route('inflable.edit', $infla->id) }}"
                                class="btn btn-warning btn-sm mr-3">EDITAR</a>
                            </form>
                        </div>
                    </td>
                </tr>
                <a href="{{route('catego')}}" class="btn btn-primary">Volver atras</a>
            @endforeach
        </tbody>
    </table>
@endsection
