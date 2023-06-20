@extends('layouts.plantilla')

@section('cont')
<div class="container">
    @can('productos.create')
        <a href="{{ route('productos.create') }}" class="btn btn-primary">crear producto</a>
    @endcan
    <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    @foreach ($Productos as $Producto)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="{{ $Producto->imagen }}" class="card-img-top" alt="{{ $Producto->nombre }}">
                            <div class="card-body">
                                <h4 class="card-title">{{ $Producto->nombre }}</h4>
                                <p class="card-text">{{ $Producto->cantidadl }}</p>
                                <p class="card-price"> {{ $Producto->precio }}</p>
                                <p class="card-text">{{ $Producto->cnombre }}</p>
                                <p class="card-text">{{ $Producto->subnombre }}</p>
                                @can('productos.destroy')
                                <button class="btn btn-danger btn-sm eliminar" data-id="{{ $Producto->id }}">ELIMINAR</button>
                            @endcan
                            @can('productos.edit')
                                <a href="{{ route('productos.edit', $Producto->id) }}"
                                    class="btn btn-warning btn-sm mr-3">EDITAR</a>
                            @endcan
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
<script>
    $('.eliminar').click(function() {
        var id = $(this).data('id'); // Obtener el valor del atributo data-id
        Swal.fire({
            title: '¿Estás seguro de hacer eso?',
            text: "Recuerda que esta acción no es reversible",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Sí, borrar!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'DELETE',
                    url: "{{ route('productos.destroy', ':id') }}".replace(':id', id),
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(respuesta) {
                        Swal.fire(
                            'Éxito',
                            'Cambios efectuados correctamente',
                            'success'
                        );
                        // Eliminar el elemento eliminado de la interfaz
                        $(`.eliminar[data-id=${id}]`).closest('.col-md-4').remove();
                    },
                    error: function(respuesta) {
                        Swal.fire(
                            'Error',
                            'Error desconocido',
                            'error'
                        );
                    }
                });
            }
        });
    });
</script>
@endsection
