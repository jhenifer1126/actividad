@extends('layouts.plantilla')

@section('cont')
    <a href="{{ route('brinca.create') }}" class="btn btn-primary">crear nuevo registro</a>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Capacidad</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Valor Alquiler</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Brinca as $brinca)
                <tr>
                    <td>{{ $brinca->Capacidad }}</td>
                    <td>{{ $brinca->Cantidad}}</td>
                    <td>{{ $brinca->ValorAlquiler }}</td>
                    <td>
                        <div class=row>

                            <form action="{{ route('brinca.destroy', $brinca->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">ELIMINAR</button>
                                <a href="{{ route('brinca.edit', $brinca->id) }}"
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
