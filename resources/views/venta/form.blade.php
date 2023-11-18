<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('10') }}
            {{ Form::text('10', $venta->10, ['class' => 'form-control' . ($errors->has('10') ? ' is-invalid' : ''), 'placeholder' => '10']) }}
            {!! $errors->first('10', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_venta') }}
            {{ Form::text('fecha_venta', $venta->fecha_venta, ['class' => 'form-control' . ($errors->has('fecha_venta') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Venta']) }}
            {!! $errors->first('fecha_venta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>