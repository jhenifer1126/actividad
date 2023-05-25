@extends('layouts.plantilla')

@section('cont')
    <form action="{{ route('ball.store') }}" method="post">
        @csrf
        <div class="mt-2">
            <label for="exampleInputPassword1">Personas por juego</label>
            <input type="number" class="form-control" name="PersonasJuego" placeholder="cantidad de personas por juego">
        </div>
        <div class="mt-2">
            <label for="exampleInputPassword1">Valor alquiler</label>
            <input type="number" class="form-control" name="ValorAlquiler" placeholder="Valor alquiler del bumper ball">
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">enviar</button>

        </div>
    </form>
@endsection
