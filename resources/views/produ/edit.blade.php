@extends('layouts.plantilla');

@section('cont')
    <form action="{{ route('productos.update', $Productos->id) }}" method="POST">
        @csrf()
        @method('PUT')
        <div class="mb-3 mt-3">
            <label for="" class="form-label">NOMBRE</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" required
                value="{{ $Productos->Nombre }}">
        </div>
        <div class="mt-3">
            <label for="" class="form-label">CANTIDAD</label>
            <input type="number" class="form-control" id="Cantidadl" name="Cantidadl" required
                value="{{ $Productos->Cantidadl }}">
        </div>
        <div class="mt-3">
            <label for="" class="form-label">PRECIO</label>
            <input type="number" class="form-control" id="Precio" name="Precio" required
                value="{{ $Productos->Precio }}">
        </div>
        <div class="mt-5">
            <button type="submit" class="btn btn-success mr -4 ">Guardar</button>
            <a href="{{ route('productos.index') }}" class="btn btn-danger">Cancelar</a>
        </div>

    </form>
@endsection
