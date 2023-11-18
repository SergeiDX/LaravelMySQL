<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_genero') }}
            {{ Form::text('nombre_genero', $genero->nombre_genero, ['class' => 'form-control' . ($errors->has('nombre_genero') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Genero']) }}
            {!! $errors->first('nombre_genero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_videojuego') }}
            {{ Form::text('id_videojuego', $genero->id_videojuego, ['class' => 'form-control' . ($errors->has('id_videojuego') ? ' is-invalid' : ''), 'placeholder' => 'Id Videojuego']) }}
            {!! $errors->first('id_videojuego', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_clasificacion') }}
            {{ Form::text('id_clasificacion', $genero->id_clasificacion, ['class' => 'form-control' . ($errors->has('id_clasificacion') ? ' is-invalid' : ''), 'placeholder' => 'Id Clasificacion']) }}
            {!! $errors->first('id_clasificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>