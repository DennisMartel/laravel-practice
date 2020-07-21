@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header bg-info">
                        <h4 class="text-center text-white">{{ __('actualizar nota') }}
                            <a href="{{ route('notes.index') }}">
                                <button class="btn btn-secondary btn-sm">
                                    volver
                                </button>
                            </a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('notes.update', $note->id) }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label for="titulo">{{ __('titulo') }}</label>
                                <input type="text" name="title" class="form-control" value="{{ $note->title }}">
                            </div>
                            <div class="form-group">
                                <label for="titulo">{{ __('descripcion') }}</label>
                                <input type="text" name="content" class="form-control" value="{{ $note->content }}">
                            </div>
                            <button type="submit" class="btn btn-success float-right">actualizar</button>
                        </form>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
   
@endsection
