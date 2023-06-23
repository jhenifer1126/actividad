@extends('layouts.plantilla')

@section('cont')
    <form action="{{ route('productos.store') }}" method="post">
        @csrf
        <div class="mt-2">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" name="nombre" placeholder="nombre del producto">
        </div>
        <div class="mt-2">
            <label for="exampleInputPassword1">Precio</label>
            <input type="number" class="form-control" name="precio" placeholder="Precio del producto">
        </div>
        <div class="mt-2">
            <label for="exampleInputPassword1">Cantidad</label>
            <input type="number" class="form-control" name="cantidadl" placeholder="cantidad del producto">
        </div>
        <div class="mt-2">
            <label for="" class="form-label">CATEGORIA</label>
            <select onchange="opciones()" class="form-control" id="categoria" name="categoria" required>
              <option value="" disabled selected>Selecciona una categoría</option>
            @foreach ($categorias as $categoria)
                <option value="{{$categoria->id}}" required>{{$categoria->nombre}}</option>
            @endforeach
            </select>
        </div>

        <div>
            <label for="" class="form-label">Subcategoria</label>
            <select class="form-control" id="subcategoria" name="subcategoria">

            </select>
        </div>
        <div class="mb-3 mt-3">
            <label class="form-label">Suba la foto de su producto</label>
            <input id="file" type="file" class="form-control" name="file" required accept="image/*">
          </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success mr -4 ">ENVIAR </button>
            <a href="{{route('productos.index')}}" class="btn btn-danger">CANCELAR</a>
        </div>
    </form>

    <script>
        function opciones(){
            var option1 = document.getElementById("categoria");
            var option2 = document.getElementById("subcategoria");

            var valor =option1.value;

            option2.innerHTML = "";

            @foreach ($categorias as $categoria)
             if (valor === "{{$categoria->id}}"){
                @foreach ($subcategorias as $subcategoria)
                   if("{{$categoria->id }}" === "{{$subcategoria->categorias_id }}"){
                    option2.add(new Option("{{$subcategoria->nombre}}","{{$subcategoria->id}}"));
                }
                @endforeach
             }

            @endforeach
        }
    </script>
@endsection

