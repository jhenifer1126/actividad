@extends('layouts.plantilla');

@section('cont')
    <form action="{{ route('productos.update', $Productos->id) }}" method="POST" enctype="multipart/form-data">
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
                <option value="{{$categoria->id}}" {{ $categoria->id === $Productos->categorias_id ? 'selected' : '' }}>
                    {{$categoria->nombre}}</option>
            @endforeach
            </select>
        </div>

        <div>
            <label for="" class="form-label">Subcategoria</label>
            <select class="form-control" id="subcategoria" name="subcategoria">
                @foreach ($subcategorias as $subcategoria)
                <option value="{{ $subcategoria->id }}"
                    {{ $subcategoria->id === $Productos->subcategorias_id ? 'selected' : '' }}>
                    {{ $subcategoria->nombre }}
                </option>
            @endforeach
            </select>
        </div>
        <div class="mt-3">
        <label class="form-label">Suba la foto del producto</label>
        <input id="file" type="file" class="form-control" name="file" accept="image/*">
       </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success mr -4">ENVIAR</button>
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
             if ("{{$categoria->id}}" === valor ){
                @foreach ($subcategorias as $subcategoria)
                   if("{{$categoria->id }}" === "{{$subcategoria->categorias_id }}"){
                    var option3 = document.createElement("option");
                option3.value = "{{ $subcategoria->id }}";
                option3.text = "{{ $subcategoria->nombre }}";
                option3.selected = "{{ $subcategoria->id }}" === "{{ $Productos->subcategorias_id }}";
                option2.appendChild(option3);

                }
                @endforeach
             }

            @endforeach
        }
    </script>
@endsection
