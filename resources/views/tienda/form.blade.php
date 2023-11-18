<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_tienda') }}
            {{ Form::text('nombre_tienda', $tienda->nombre_tienda, ['class' => 'form-control' . ($errors->has('nombre_tienda') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Tienda']) }}
            {!! $errors->first('nombre_tienda', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_videojuego') }}
            {{ Form::text('id_videojuego', $tienda->id_videojuego, ['class' => 'form-control' . ($errors->has('id_videojuego') ? ' is-invalid' : ''), 'placeholder' => 'Id Videojuego']) }}
            {!! $errors->first('id_videojuego', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_venta') }}
            {{ Form::text('id_venta', $tienda->id_venta, ['class' => 'form-control' . ($errors->has('id_venta') ? ' is-invalid' : ''), 'placeholder' => 'Id Venta']) }}
            {!! $errors->first('id_venta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>