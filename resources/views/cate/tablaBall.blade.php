@extends('layouts.plantilla')

@section('cont')
    <a href="{{ route('ball.create') }}" class="btn btn-primary">crear nuevo registro</a>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Personas Juego</th>
                <th scope="col">Valor Alquiler</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Ball as $ball)
                <tr>
                    <td>{{ $ball->PersonasJuego}}</td>
                    <td>{{ $ball->ValorAlquiler }}</td>
                    <td>
                        <div class=row>

                            <form action="{{ route('ball.destroy', $ball->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">ELIMINAR</button>
                                <a href="{{ route('ball.edit', $ball->id) }}"
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
