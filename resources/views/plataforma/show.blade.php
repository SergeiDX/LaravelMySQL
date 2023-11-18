@extends('layouts.app')

@section('template_title')
    {{ $plataforma->name ?? "{{ __('Show') Plataforma" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Plataforma</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('plataformas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Plataforma:</strong>
                            {{ $plataforma->nombre_plataforma }}
                        </div>
                        <div class="form-group">
                            <strong>Fabricante:</strong>
                            {{ $plataforma->fabricante }}
                        </div>
                        <div class="form-group">
                            <strong>Id Videojuego:</strong>
                            {{ $plataforma->id_videojuego }}
                        </div>
                        <div class="form-group">
                            <strong>Id Usuario:</strong>
                            {{ $plataforma->id_usuario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
