@extends('layouts.app')

@section('template_title')
    {{ $venta->name ?? "{{ __('Show') Venta" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Venta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ventas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>10:</strong>
                            {{ $venta->10 }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Venta:</strong>
                            {{ $venta->fecha_venta }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
