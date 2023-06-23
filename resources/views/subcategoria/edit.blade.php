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
            @foreach ($categoria as $catego )
                <option value="{{$catego->id}}">{{$catego->nombre}}</option>
            @endforeach
        </select>
    </div>
    <div class="mt-3">
        <label class="form-label">Suba la foto de la subcategoria</label>
        <input id="file" type="file" class="form-control" name="file" accept="image/*">
       </div>
    <div class="mt-5">
        <button type="submit" class="btn btn-success mr -4 ">Guardar</button>
        <a href="{{ route('subcategoria.index') }}" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection
