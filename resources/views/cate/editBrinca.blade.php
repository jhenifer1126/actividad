@extends('layouts.plantilla');

@section('cont')
    <form action="{{ route('brinca.update', $Brinca->id) }}" method="POST">
        @csrf()
        @method('PUT')
        <div class="mt-3">
            <label for="" class="form-label">CAPACIDAD</label>
            <input type="number" class="form-control" id="Capacidad" name="Capacidad" required
                value="{{ $Brinca->Capacidad }}">
        </div>
        <div class="mt-3">
            <label for="" class="form-label">CANTIDAD</label>
            <input type="number" class="form-control" id="Cantidad" name="Cantidad" required
                value="{{ $Brinca->Cantidad }}">
        </div>
        <div class="mt-3">
            <label for="" class="form-label">VALOR ALQUILER</label>
            <input type="number" class="form-control" id="ValorAlquiler" name="ValorAlquiler" required
                value="{{ $Brinca->ValorAlquiler }}">
        </div>
        <div class="mt-5">
            <button type="submit" class="btn btn-success mr -4 ">Guardar</button>
            <a href="{{ route('brinca.index') }}" class="btn btn-danger">Cancelar</a>
        </div>

    </form>
@endsection
