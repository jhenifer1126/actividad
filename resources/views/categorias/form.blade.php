@extends('layouts.plantilla')

@section('cont')
    <form action="{{ route('categoria.store') }}" method="post">
        @csrf
        <div class="mt-2">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" name="nombre" placeholder="nombre del producto">
        </div>
        <div class="mt-2">
            <label for="exampleInputPassword1">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" placeholder="Precio del producto">
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">enviar</button>
        </div>
    </form>
@endsection
