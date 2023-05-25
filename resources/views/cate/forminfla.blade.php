@extends('layouts.plantilla')

@section('cont')
    <form action="{{ route('inflable.store') }}" method="post">
        @csrf
        <div class="mt-2">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" name="Nombre" placeholder="nombre del personaje del infable">
        </div>
        <div class="mt-2">
            <label for="exampleInputPassword1">Capacidad</label>
            <input type="number" class="form-control" name="Capacidad" placeholder="capacidad del inflable">
        </div>
        <div class="mt-2">
            <label for="exampleInputPassword1">Cantidad</label>
            <input type="number" class="form-control" name="Cantidad" placeholder="cantidad del inflables">
        </div>
        <div class="mt-2">
            <label for="exampleInputPassword1">Valor alquiler</label>
            <input type="number" class="form-control" name="ValorAlquiler" placeholder="Valor alquiler del infable">
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">enviar</button>

        </div>
    </form>
@endsection
