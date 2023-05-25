@extends('layouts.plantilla')

@section('content')
    <a href="{{ route('ball.create') }}" class="btn btn-primary">crear nuevo registro</a>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Personas Juego</th>
                <th scope="col">Valor Alquiler</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Ball as $ball)
                <tr>
                    <td>{{ $ball->PerdonasJuego}}</td>
                    <td>{{ $ball->ValorAlquiler }}</td>
                    <td>
                        <div class=row>
                            <a href="{{ route('ball.edit', $Ball->id) }}"
                                class="btn btn-warning btn-sm mr-3">EDITAR</a>
                            <form action="{{ route('ball.destroy', $Ball->id) }}" method="POST">
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
