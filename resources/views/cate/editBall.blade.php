@extends('layouts.plantilla');

@section('cont')
    <form action="{{ route('ball.update', $Ball->id) }}" method="POST">
        @csrf()
        @method('PUT')

        <div class="mt-3">
            <label for="" class="form-label">PERSONAS JUEGO</label>
            <input type="number" class="form-control" id="Cantidad" name="Cantidad" required
                value="{{ $Ball->PersonasJuego }}">
        </div>
        <div class="mt-3">
            <label for="" class="form-label">VALOR ALQUILER</label>
            <input type="number" class="form-control" id="ValorAlquiler" name="ValorAlquiler" required
                value="{{ $Ball->ValorAlquiler }}">
        </div>
        <div class="mt-5">
            <button type="submit" class="btn btn-success mr -4 ">Guardar</button>
            <a href="{{ route('ball.index') }}" class="btn btn-danger">Cancelar</a>
        </div>

    </form>
@endsection
