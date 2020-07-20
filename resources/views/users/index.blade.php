@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="">
            <button class="btn btn-success float-right mb-sm-3">registrar usuario</button>
        </a>
        <table class="table table-hover mt-3">
            <thead class="bg-info">
                <th>usuario</th>
                <th>correo</th>
                <th colspan="2">opciones</th>
            </thead>
            @foreach ($users as $user)
            <tbody>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="">
                            <button class="btn btn-warning">editar</button>
                        </a>
                    </td>
                    <td>
                        <a href="">
                            <button class="btn btn-danger">eliminar</button>
                        </a>
                    </td>
            </tbody>
            @endforeach
        </table>
        {{ $users->links()}}
    </div>

@endsection
