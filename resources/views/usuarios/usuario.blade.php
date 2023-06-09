@extends('layouts.plantilla')

@section('cont')
    <table id="Table" class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Roles</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->roles }}</td>
                    <td>
                        <div class=row>
@can('user.edit')
                        <a href="{{ route('user.edit', $user->id) }}"class="btn btn-warning btn-sm mr-3">EDITAR</a>
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
    $(document).ready(function() {
        $('#Table').DataTable();
    });
</script>
@endsection
