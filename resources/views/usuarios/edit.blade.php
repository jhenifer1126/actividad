@extends('layouts.plantilla');

@section('cont')
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf()
        @method('PUT')
        <div class="mb-3 mt-3">
            <label for="" class="form-label">NOMBRE</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required
                value="{{ $user->nombre }}">
        </div>
        <div class="mt-3">
            <label for="" class="form-label">CORREO</label>
            <input type="number" class="form-control" id="cantidadl" name="cantidadl" required
                value="{{ $user->email }}">
        </div>
        <div class="mt-2">
            <label class="form-label">ROLES</label>
        <select  class="form-control" name="roles" id="roles" required>
            <option disabled selected>selecciona un rol</option>
            @foreach ($role as $rol)
                <option value="{{$rol->id}}"required>{{$rol->name}}</option>
            @endforeach
        </select>
       </div>

    </form>
@endsection
