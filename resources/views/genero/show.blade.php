@extends('layouts.app')

@section('template_title')
    {{ $genero->name ?? "{{ __('Show') Genero" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Genero</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('generos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Genero:</strong>
                            {{ $genero->nombre_genero }}
                        </div>
                        <div class="form-group">
                            <strong>Id Videojuego:</strong>
                            {{ $genero->id_videojuego }}
                        </div>
                        <div class="form-group">
                            <strong>Id Clasificacion:</strong>
                            {{ $genero->id_clasificacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
