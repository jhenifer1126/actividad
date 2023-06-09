@extends('layouts.plantilla');

@section('cont')
    <form action="{{ route('productos.update', $Productos->id) }}" method="POST">
        @csrf()
        @method('PUT')
        <div class="mb-3 mt-3">
            <label for="" class="form-label">NOMBRE</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required
                value="{{ $Productos->nombre }}">
        </div>
        <div class="mt-3">
            <label for="" class="form-label">CANTIDAD</label>
            <input type="number" class="form-control" id="cantidadl" name="cantidadl" required
                value="{{ $Productos->cantidadl }}">
        </div>
        <div class="mt-3">
            <label for="" class="form-label">PRECIO</label>
            <input type="number" class="form-control" id="precio" name="precio" required
                value="{{ $Productos->precio }}">
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


        <div class="mt-4">
            <button type="submit" class="btn btn-primary">enviar</button>
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
