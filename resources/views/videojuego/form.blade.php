<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('titulo_videojuego') }}
            {{ Form::text('titulo_videojuego', $videojuego->titulo_videojuego, ['class' => 'form-control' . ($errors->has('titulo_videojuego') ? ' is-invalid' : ''), 'placeholder' => 'Titulo Videojuego']) }}
            {!! $errors->first('titulo_videojuego', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lanzamiento') }}
            {{ Form::text('lanzamiento', $videojuego->lanzamiento, ['class' => 'form-control' . ($errors->has('lanzamiento') ? ' is-invalid' : ''), 'placeholder' => 'Lanzamiento']) }}
            {!! $errors->first('lanzamiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_desarrollador') }}
            {{ Form::text('id_desarrollador', $videojuego->id_desarrollador, ['class' => 'form-control' . ($errors->has('id_desarrollador') ? ' is-invalid' : ''), 'placeholder' => 'Id Desarrollador']) }}
            {!! $errors->first('id_desarrollador', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>