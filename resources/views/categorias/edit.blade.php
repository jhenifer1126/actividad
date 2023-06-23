@extends('layouts.plantilla');

@section('cont')
<form action="{{ route('categoria.update', $categorias->id) }}" method="POST" enctype="multipart/form-data">
    @csrf()
    @method('PUT')
    <div class="mb-3 mt-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required
            value="{{ $categorias->nombre}}">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Descripcion</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" required
            value="{{ $categorias->descripcion }}">
    </div>
    <div class="mt-3">
        <label class="form-label">Suba la foto de la categoria</label>
        <input id="file" type="file" class="form-control" name="file" accept="image/*">
       </div>
    <div class="mt-5">
        <button type="submit" class="btn btn-success mr -4 ">Guardar</button>
        <a href="{{ route('categoria.index') }}" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection
