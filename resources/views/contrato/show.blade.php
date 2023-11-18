@extends('layouts.app')

@section('template_title')
    {{ $contrato->name ?? "{{ __('Show') Contrato" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Contrato</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contratos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion Contrato:</strong>
                            {{ $contrato->descripcion_contrato }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $contrato->fecha_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Limite:</strong>
                            {{ $contrato->fecha_limite }}
                        </div>
                        <div class="form-group">
                            <strong>Id Desarrollador:</strong>
                            {{ $contrato->id_desarrollador }}
                        </div>
                        <div class="form-group">
                            <strong>Id Empresa:</strong>
                            {{ $contrato->id_empresa }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
