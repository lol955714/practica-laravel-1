<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $mntProyecto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $mntProyecto->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $mntProyecto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('color') }}
            {{ Form::text('color', $mntProyecto->color, ['class' => 'form-control' . ($errors->has('color') ? ' is-invalid' : ''), 'placeholder' => 'Color']) }}
            {!! $errors->first('color', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('icono') }}
            {{ Form::text('icono', $mntProyecto->icono, ['class' => 'form-control' . ($errors->has('icono') ? ' is-invalid' : ''), 'placeholder' => 'Icono']) }}
            {!! $errors->first('icono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_establecimiento') }}
            {{ Form::text('id_establecimiento', $mntProyecto->id_establecimiento, ['class' => 'form-control' . ($errors->has('id_establecimiento') ? ' is-invalid' : ''), 'placeholder' => 'Id Establecimiento']) }}
            {!! $errors->first('id_establecimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_fuente_fondos') }}
            {{ Form::text('id_fuente_fondos', $mntProyecto->id_fuente_fondos, ['class' => 'form-control' . ($errors->has('id_fuente_fondos') ? ' is-invalid' : ''), 'placeholder' => 'Id Fuente Fondos']) }}
            {!! $errors->first('id_fuente_fondos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_estado_proyecto') }}
            {{ Form::text('id_estado_proyecto', $mntProyecto->id_estado_proyecto, ['class' => 'form-control' . ($errors->has('id_estado_proyecto') ? ' is-invalid' : ''), 'placeholder' => 'Id Estado Proyecto']) }}
            {!! $errors->first('id_estado_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>
