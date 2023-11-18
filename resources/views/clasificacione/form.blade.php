<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('clasificacion') }}
            {{ Form::text('clasificacion', $clasificacione->clasificacion, ['class' => 'form-control' . ($errors->has('clasificacion') ? ' is-invalid' : ''), 'placeholder' => 'Clasificacion']) }}
            {!! $errors->first('clasificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_clasificacion') }}
            {{ Form::text('tipo_clasificacion', $clasificacione->tipo_clasificacion, ['class' => 'form-control' . ($errors->has('tipo_clasificacion') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Clasificacion']) }}
            {!! $errors->first('tipo_clasificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>