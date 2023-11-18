@extends('layouts.app')

@section('template_title')
    {{ $desarrolladore->name ?? "{{ __('Show') Desarrolladore" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Desarrolladore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('desarrolladores.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Desarrollador:</strong>
                            {{ $desarrolladore->nombre_desarrollador }}
                        </div>
                        <div class="form-group">
                            <strong>Fundacion:</strong>
                            {{ $desarrolladore->fundacion }}
                        </div>
                        <div class="form-group">
                            <strong>Sitio Web:</strong>
                            {{ $desarrolladore->sitio_web }}
                        </div>
                        <div class="form-group">
                            <strong>Pais Origen:</strong>
                            {{ $desarrolladore->pais_origen }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
