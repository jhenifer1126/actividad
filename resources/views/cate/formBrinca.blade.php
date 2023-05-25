@extends('layouts.plantilla')

@section('cont')
    <form action="{{ route('brinca.store') }}" method="post">
        @csrf
        <div class="mt-2">
            <label for="exampleInputPassword1">Capacidad</label>
            <input type="number" class="form-control" name="Capacidad" placeholder="capacidad del brinca brinca">
        </div>
        <div class="mt-2">
            <label for="exampleInputPassword1">Cantidad</label>
            <input type="number" class="form-control" name="Cantidad" placeholder="cantidad del brinca brinca">
        </div>
        <div class="mt-2">
            <label for="exampleInputPassword1">Valor alquiler</label>
            <input type="number" class="form-control" name="ValorAlquiler" placeholder="Valor alquiler del brinca brinca">
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">enviar</button>

        </div>
    </form>
@endsection
