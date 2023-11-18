@extends('layouts.app')

@section('template_title')
    {{ $empresa->name ?? "{{ __('Show') Empresa" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Empresa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empresas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Empresa:</strong>
                            {{ $empresa->nombre_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Fundacion:</strong>
                            {{ $empresa->fundacion }}
                        </div>
                        <div class="form-group">
                            <strong>Sitio Web:</strong>
                            {{ $empresa->sitio_web }}
                        </div>
                        <div class="form-group">
                            <strong>Pais Origen:</strong>
                            {{ $empresa->pais_origen }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
