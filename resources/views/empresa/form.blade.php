<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_empresa') }}
            {{ Form::text('nombre_empresa', $empresa->nombre_empresa, ['class' => 'form-control' . ($errors->has('nombre_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Empresa']) }}
            {!! $errors->first('nombre_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fundacion') }}
            {{ Form::text('fundacion', $empresa->fundacion, ['class' => 'form-control' . ($errors->has('fundacion') ? ' is-invalid' : ''), 'placeholder' => 'Fundacion']) }}
            {!! $errors->first('fundacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sitio_web') }}
            {{ Form::text('sitio_web', $empresa->sitio_web, ['class' => 'form-control' . ($errors->has('sitio_web') ? ' is-invalid' : ''), 'placeholder' => 'Sitio Web']) }}
            {!! $errors->first('sitio_web', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pais_origen') }}
            {{ Form::text('pais_origen', $empresa->pais_origen, ['class' => 'form-control' . ($errors->has('pais_origen') ? ' is-invalid' : ''), 'placeholder' => 'Pais Origen']) }}
            {!! $errors->first('pais_origen', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>