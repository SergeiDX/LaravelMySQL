<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('descripcion_contrato') }}
            {{ Form::text('descripcion_contrato', $contrato->descripcion_contrato, ['class' => 'form-control' . ($errors->has('descripcion_contrato') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Contrato']) }}
            {!! $errors->first('descripcion_contrato', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_inicio') }}
            {{ Form::text('fecha_inicio', $contrato->fecha_inicio, ['class' => 'form-control' . ($errors->has('fecha_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio']) }}
            {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_limite') }}
            {{ Form::text('fecha_limite', $contrato->fecha_limite, ['class' => 'form-control' . ($errors->has('fecha_limite') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Limite']) }}
            {!! $errors->first('fecha_limite', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_desarrollador') }}
            {{ Form::text('id_desarrollador', $contrato->id_desarrollador, ['class' => 'form-control' . ($errors->has('id_desarrollador') ? ' is-invalid' : ''), 'placeholder' => 'Id Desarrollador']) }}
            {!! $errors->first('id_desarrollador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_empresa') }}
            {{ Form::text('id_empresa', $contrato->id_empresa, ['class' => 'form-control' . ($errors->has('id_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Id Empresa']) }}
            {!! $errors->first('id_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>