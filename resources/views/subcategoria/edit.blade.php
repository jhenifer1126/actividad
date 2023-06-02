@extends('layouts.plantilla');

@section('cont')
<form action="{{ route('subcategoria.update', $subcategoria->id) }}" method="POST">
    @csrf()
    @method('PUT')
    <div class="mb-3 mt-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required
            value="{{ $subcategoria->nombre }}">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Descripcion</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" required
            value="{{ $subcategoria->descripcion }}">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Categoria</label>
        <select class="form-control" name="categoria">
            @foreach ($categorias as $categoria )
                <option value="{{$Scategorias->id}}">{{$categorias->nombre}}</option>
            @endforeach
        </select>
    </div>
    <div class="mt-5">
        <button type="submit" class="btn btn-success mr -4 ">Guardar</button>
        <a href="{{ route('subcategoria.index') }}" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection
