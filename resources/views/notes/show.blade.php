@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="{{ route('notes.index') }}">
            <button class="btn btn-secondary btn-sm float-right mb-sm-3">
                volver
            </button>
        </a>
        <table class="table table-hover mt-3">
            <thead class="bg-info">
                <th>titulo</th>
                <th>descripcion</th>
                <th colspan="3">opciones</th>
            </thead>
            <tbody>
                    <td>{{ $note->title }}</td>
                    <td>{{ $note->content }}</td>
                    <td>
                        <a href="{{ route('notes.show', $note->id) }}">
                            <button class="btn btn-secondary btn-sm">ver</button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('notes.edit', $note->id) }}">
                            <button class="btn btn-warning btn-sm">editar</button>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('notes.destroy', $note->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">eliminar</button>
                        </form>
                    </td>
            </tbody>
        </table>
    </div>

@endsection
