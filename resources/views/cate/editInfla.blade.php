@extends('layouts.plantilla');

@section('cont')
    <form action="{{ route('inflable.update', $Infla->id) }}" method="POST">
        @csrf()
        @method('PUT')
        <div class="mb-3 mt-3">
            <label for="" class="form-label">NOMBRE</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" required
                value="{{ $Infla->Nombre }}">
        </div>
        <div class="mt-3">
            <label for="" class="form-label">CAPACIDAD</label>
            <input type="number" class="form-control" id="Capacidad" name="Capacidad" required
                value="{{ $Infla->Capacidad }}">
        </div>
        <div class="mt-3">
            <label for="" class="form-label">CANTIDAD</label>
            <input type="number" class="form-control" id="Cantidad" name="Cantidad" required
                value="{{ $Infla->Cantidad }}">
        </div>
        <div class="mt-3">
            <label for="" class="form-label">VALOR ALQUILER</label>
            <input type="number" class="form-control" id="ValorAlquiler" name="ValorAlquiler" required
                value="{{ $Infla->ValorAlquiler }}">
        </div>
        <div class="mt-5">
            <button type="submit" class="btn btn-success mr -4 ">Guardar</button>
            <a href="{{ route('inflable.index') }}" class="btn btn-danger">Cancelar</a>
        </div>

    </form>
@endsection
