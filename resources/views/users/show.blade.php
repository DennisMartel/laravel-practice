@extends('layouts.app')

@section('content')
    
    <div class="container">
        <a href="{{ route('users.index') }}">
            <button class="btn btn-secondary btn-sm float-right mb-sm-3">
                volver
            </button>
        </a>
        <table class="table table-hover mt-3">
            <thead class="bg-info">
                <th>usuario</th>
                <th>correo</th>
                <th colspan="3">opciones</th>
            </thead>
            <tbody>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}">
                            <button class="btn btn-secondary btn-sm">ver</button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}">
                            <button class="btn btn-warning btn-sm">editar</button>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">eliminar</button>
                        </form>
                    </td>
            </tbody>
        </table>
    </div>

@endsection
