@extends('layouts.plantilla')

@section('cont')
    @can('productos.create')
        <a href="{{ route('productos.create') }}" class="btn btn-primary">crear producto</a>
    @endcan
    <table id="Table" class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Categoria</th>
                <th scope="col">Subcategoria</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Productos as $Producto)
                <tr>
                    <td>{{ $Producto->nombre }}</td>
                    <td>{{ $Producto->cantidadl }}</td>
                    <td>{{ $Producto->precio }}</td>
                    <td>{{ $Producto->cnombre }}</td>
                    <td>{{ $Producto->subnombre }}</td>
                    <td>
                        <div class=row>

                            @can('productos.destroy')
                                <input type="hidden" value="{{ $Producto->id }}"></input>
                                <span class="btn btn-danger btn-sm eliminar">ELIMINAR</span>
                            @endcan
                            @can('productos.edit')
                                <a href="{{ route('productos.edit', $Producto->id) }}"
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
                        url: "{{ route('productos.destroy', ':id') }}".replace(':id', id),
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
