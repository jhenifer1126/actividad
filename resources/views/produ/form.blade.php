@extends('layouts.plantilla')

@section('cont')
    <form action="{{ route('productos.store') }}" method="post">
        @csrf
        <div class="mt-2">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" name="Nombre" placeholder="nombre del producto">
        </div>
        <div class="mt-2">
            <label for="exampleInputPassword1">Precio</label>
            <input type="number" class="form-control" name="Precio" placeholder="Precio del producto">
        </div>
        <div class="mt-2">
            <label for="exampleInputPassword1">Cantidad</label>
            <input type="number" class="form-control" name="Cantidadl" placeholder="cantidad del producto">
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
        <select onchange="opciones()" class="form-control" id="subcategoria" name="subcategoria">
            <option disabled selected>selecciona una subcategoria</option>
            @foreach ($subcategorias as $subcategoria )
                <option value="{{$subcategoria->id}}"required>{{$subcategoria->nombre}}</option>
            @endforeach
        </select>
       </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">enviar</button>

        </div>
    </form>
    <Script>
    function opciones(){
        var opcion1 = document.getElementById('categoria');
        var opcion2 = document.getElementById('subcategoria');
        var valor = opcion1.value;
         opcion2.innerHTML="";

        @foreach ($categorias as $categoria )
            if (valor==="{{$categoria->id}}") {
                @foreach ($subcategorias as $subcategoria )
                    if ("{{$categoria->id}}"==="{{$subcategoria->categoria_id}}") {
                        opcion2.add(new Option("$subcategoria->nombre","$subcategoria->id"))
                    }
                @endforeach
            }
        @endforeach
    }
    </Script>
@endsection
