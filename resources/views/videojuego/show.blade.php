@extends('layouts.app')

@section('template_title')
    {{ $videojuego->name ?? "{{ __('Show') Videojuego" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Videojuego</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('videojuegos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo Videojuego:</strong>
                            {{ $videojuego->titulo_videojuego }}
                        </div>
                        <div class="form-group">
                            <strong>Lanzamiento:</strong>
                            {{ $videojuego->lanzamiento }}
                        </div>
                        <div class="form-group">
                            <strong>Id Desarrollador:</strong>
                            {{ $videojuego->id_desarrollador }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
