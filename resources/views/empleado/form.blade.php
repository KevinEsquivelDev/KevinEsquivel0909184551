<div class="box box-info padding-1">
    <div class="box-body">

        <div class="row g-3">
            <div class="col mb-3">
                {{ Form::label('Nombre completo del empleado') }}
                {{ Form::text('nombre_empleado', $empleado->nombre_empleado, ['class' => 'form-control' . ($errors->has('nombre_empleado') ? ' is-invalid' : ''), 'placeholder' => 'Kevin Emanuel Esquivel Teo']) }}
                {!! $errors->first('nombre_empleado', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="row g-3">
            <div class="col mb-3">
                {{ Form::label('Usuario quien lo crea') }}
                {{ Form::select('id_usuario',$var, $empleado->id_usuario, ['class' => 'form-control' . ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar']) }}
                {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="row g-3">
            <div class="col mb-3">
                {{ Form::label('numero_telefono') }}
                {{ Form::text('numero_telefono', $empleado->numero_telefono, ['class' => 'form-control' . ($errors->has('numero_telefono') ? ' is-invalid' : ''), 'placeholder' => '48399189']) }}
                {!! $errors->first('numero_telefono', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="row g-3">
            <div class="col mb-3">
                {{ Form::label('correo') }}
                {{ Form::text('correo', $empleado->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'ejemplo@aurora.com.gt']) }}
                {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="row g-3">
            <div class="col mb-3">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $empleado->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>


        <div class="row g-3">
            <div class="col mb-3">
                {{ Form::label('departamento') }}
                {{ Form::text('departamento', $empleado->departamento, ['class' => 'form-control' . ($errors->has('departamento') ? ' is-invalid' : ''), 'placeholder' => 'Izabal']) }}
                {!! $errors->first('departamento', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>


    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
        <a class="btn btn-danger" href="{{ route('empleados.index') }}"><i class="fas fa-ban"></i>  Cancelar</a>
    </div>
</div>
