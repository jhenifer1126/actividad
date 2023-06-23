@extends('layouts.plantilla')

@section('cont')
    <form action="{{ route('subcategoria.store') }}" method="post">
        @csrf
        <div class="mt-2">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" name="nombre" placeholder="nombre de la subcaategoria">
        </div>
        <div class="mt-2">
            <label for="exampleInputPassword1">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" placeholder="Precio de la subcategoria">
        </div>
        <div class="mt-2">
            <label for="" class="form-label">Categoria</label>
        <select class="form-control" name="categoria">
            @foreach ($categoria as $catego )
                <option value="{{$catego->id}}">{{$catego->nombre}}</option>
            @endforeach
        </select>
        </div>
        <div class="mb-3 mt-3">
            <label class="form-label">Suba la foto de su subcategoria</label>
            <input id="file" type="file" class="form-control" name="file" required accept="image/*">
          </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">enviar</button>
            <a href="{{route('subcategoria.index')}}" class="btn btn-danger">CANCELAR</a>
        </div>
    </form>
@endsection
