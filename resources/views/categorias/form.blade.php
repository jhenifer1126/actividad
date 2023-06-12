@extends('layouts.plantilla')

@section('cont')
    <form action="{{ route('categoria.store') }}" method="post">
        @csrf
        <div class="mt-2">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" name="nombre" placeholder="nombre de la categoria">
        </div>
        <div class="mt-2">
            <label for="exampleInputPassword1">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" placeholder="Descripcion de la categoria">
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">enviar</button>
            <a href="{{route('categoria.index')}}" class="btn btn-danger">CANCELAR</a>
        </div>
    </form>
@endsection
