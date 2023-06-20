@extends('layouts.plantilla');

@section('cont')
<div class="container">
    @can('categoria.create')
        <a href="{{ route('categoria.create') }}" class="btn btn-primary">crear categoria</a>
    @endcan
    <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    @foreach ($categorias as $categoria)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="{{ $categoria->imagen }}" class="card-img-top" alt="{{ $categoria->nombre }}">
                            <div class="card-body">
                                <h4 class="card-title">{{ $categoria->nombre }}</h4>
                                <p class="card-text">{{ $categoria->descripcion }}</p>
                                @can('categoria.destroy')
                                <button class="btn btn-danger btn-sm eliminar" data-id="{{ $categoria->id }}">ELIMINAR</button>
                            @endcan
                            @can('categoria.edit')
                                <a href="{{ route('categoria.edit', $categoria->id) }}"
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
                    url: "{{ route('categoria.destroy', ':id') }}".replace(':id', id),
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
