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
        <div class="mt-2">
            <label class="form-label">CATEGORIAS</label>
        <select onchange="opciones()" class="form-control" name="categoria" id="categoria" required>
            <option disabled selected>selecciona una categoria</option>
            @foreach ($categorias as $categoria )
                <option value="{{$categoria->id}}"required>{{$categoria->nombre}}</option>
            @endforeach
        </select>
       </div>
       <div>
        <label for="" class="form-label">SUBCATEGORIAS</label>
        <select class="form-control" id="subcategoria" name="subcategoria">
        </select>
       </div>
        <div class="mt-5">
            <button type="submit" class="btn btn-success mr -4 ">Guardar</button>
            <a href="{{ route('productos.index') }}" class="btn btn-danger">Cancelar</a>
        </div>

    </form>
    <Script>
        function opciones(){
            var opcion1 = document.getElementById('categoria');
            var opcion2 = document.getElementById('subcategoria');
            var valor = opcion1.value;

            opcion2.innerHTML="";

            @foreach ($categorias as $categoria )
                if (valor==="{{categoria->id}}") {
                    @foreach ($subcategorias as $subcategoria )
                        if ("{{categoria->id}}"==="{{subcategoria->categoria_id}}") {
                            opcion2.add(new Option("$subcategoria->nombre","$subcategoria->id"))
                        }
                    @endforeach
                }
            @endforeach
        }
        </Script>
@endsection
