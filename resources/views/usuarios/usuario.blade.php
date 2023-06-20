@extends('layouts.plantilla')

@section('cont')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    @foreach ($users as $user)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="{{$user->file}}" class="card-img-top" alt="{{ $user->nombre }}">
                            <div class="card-body">
                                <h4 class="card-title">{{ $user->name }}</h4>
                                <p class="card-text">{{ $user->email }}</p>
                                <p class="card-text">{{ $user->roles }}</p>

                            @can('user.edit')
                                <a href="{{ route('user.edit', $user->id) }}"
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
