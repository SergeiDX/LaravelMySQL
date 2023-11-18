@extends('layouts.app')

@section('template_title')
    {{ $clasificacione->name ?? "{{ __('Show') Clasificacione" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Clasificacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clasificaciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Clasificacion:</strong>
                            {{ $clasificacione->clasificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Clasificacion:</strong>
                            {{ $clasificacione->tipo_clasificacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
