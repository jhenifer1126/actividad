@extends('layouts.plantilla');

@section('cont')
    @can('subcategoria.create')
        <a href="{{ route('subcategoria.create') }}" class="btn btn-primary">crear subcategoria</a>
    @endcan

    <table id="Table" class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">categoria</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subcategoria as $subcategoria)
                <tr>
                    <td>{{ $subcategoria->nombre }}</td>
                    <td>{{ $subcategoria->descripcion }}</td>
                    <td>{{ $subcategoria->cnombre }}</td>
                    <td>
                        <div class=row>
                            @can('subcategoria.destroy')
                                <input type="hidden" value="{{ $subcategoria->id }}">
                                <span class="btn btn-danger btn-sm eliminar">ELIMINAR</span>
                            @endcan
                            @can('subcategoria.edit')
                                <a href="{{ route('subcategoria.edit', $subcategoria->id) }}"
                                    class="btn btn-warning btn-sm mr-3">EDITAR</a>
                            @endcan


                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('js')
    <script>
        $('.eliminar').click(function() {

            tabla = $('#Table').DataTable();
            fila = $(this);


            Swal.fire({
                title: 'Estas seguro?',
                text: "Esta accion no se puede deshacer",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrar!'
            }).then((result) => {
                if (result.isConfirmed) {

                    let id = $(this).closest('td').find('input[type=hidden]').val();


                    $.ajax({
                        type: 'DELETE',
                        url: "{{ route('subcategoria.destroy', ':id') }}".replace(':id', id),
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(respuesta) {
                            Swal.fire(
                                'Éxito',
                                'Cambios efectuados correctamente',
                                'success'
                            )
                            tabla.row(fila.parents('tr')).remove().draw();

                        },
                        error: function(respuesta) {
                            Swal.fire(
                                'Error',
                                'Error desconocido',
                                'error'
                            )
                        }
                    });
                }
            })
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#Table').DataTable();
        });
    </script>
@endsection
