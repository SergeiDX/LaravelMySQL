<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_plataforma') }}
            {{ Form::text('nombre_plataforma', $plataforma->nombre_plataforma, ['class' => 'form-control' . ($errors->has('nombre_plataforma') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Plataforma']) }}
            {!! $errors->first('nombre_plataforma', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fabricante') }}
            {{ Form::text('fabricante', $plataforma->fabricante, ['class' => 'form-control' . ($errors->has('fabricante') ? ' is-invalid' : ''), 'placeholder' => 'Fabricante']) }}
            {!! $errors->first('fabricante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_videojuego') }}
            {{ Form::text('id_videojuego', $plataforma->id_videojuego, ['class' => 'form-control' . ($errors->has('id_videojuego') ? ' is-invalid' : ''), 'placeholder' => 'Id Videojuego']) }}
            {!! $errors->first('id_videojuego', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_usuario') }}
            {{ Form::text('id_usuario', $plataforma->id_usuario, ['class' => 'form-control' . ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
            {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>