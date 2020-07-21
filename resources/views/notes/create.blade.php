@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header bg-info">
                        <h4 class="text-center text-white">{{ __('crear nota') }}
                            <a href="{{ route('notes.index') }}">
                                <button class="btn btn-secondary btn-sm">
                                    volver
                                </button>
                            </a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('notes.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="titulo">{{ __('titulo') }}</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="titulo">{{ __('descripcion') }}</label>
                                <textarea name="content" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success float-right">guardar</button>
                        </form>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
   
@endsection
