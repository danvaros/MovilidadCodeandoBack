<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ID', 'Id:') !!}
    {!! Form::number('ID', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Fecha', 'Fecha:') !!}
    {!! Form::text('Fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Mes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Mes', 'Mes:') !!}
    {!! Form::text('Mes', null, ['class' => 'form-control']) !!}
</div>

<!-- Hora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Hora', 'Hora:') !!}
    {!! Form::text('Hora', null, ['class' => 'form-control']) !!}
</div>

<!-- Servicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Servicio', 'Servicio:') !!}
    {!! Form::text('Servicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Tipo', 'Tipo:') !!}
    {!! Form::text('Tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Modo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Modo', 'Modo:') !!}
    {!! Form::text('Modo', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Estado', 'Estado:') !!}
    {!! Form::text('Estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Calle Uno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Calle_uno', 'Calle Uno:') !!}
    {!! Form::text('Calle_uno', null, ['class' => 'form-control']) !!}
</div>

<!-- Calle Dos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Calle_dos', 'Calle Dos:') !!}
    {!! Form::text('Calle_dos', null, ['class' => 'form-control']) !!}
</div>

<!-- No Dom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('No_dom', 'No Dom:') !!}
    {!! Form::text('No_dom', null, ['class' => 'form-control']) !!}
</div>

<!-- Colonia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Colonia', 'Colonia:') !!}
    {!! Form::text('Colonia', null, ['class' => 'form-control']) !!}
</div>

<!-- Conductores Heridos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Conductores_heridos', 'Conductores Heridos:') !!}
    {!! Form::number('Conductores_heridos', null, ['class' => 'form-control']) !!}
</div>

<!-- Pasajeros Heridos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Pasajeros_heridos', 'Pasajeros Heridos:') !!}
    {!! Form::number('Pasajeros_heridos', null, ['class' => 'form-control']) !!}
</div>

<!-- Peatones Heridos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Peatones_heridos', 'Peatones Heridos:') !!}
    {!! Form::number('Peatones_heridos', null, ['class' => 'form-control']) !!}
</div>

<!-- Conductores Muertos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Conductores_muertos', 'Conductores Muertos:') !!}
    {!! Form::number('Conductores_muertos', null, ['class' => 'form-control']) !!}
</div>

<!-- Pasajeros Muertos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Pasajeros_muertos', 'Pasajeros Muertos:') !!}
    {!! Form::number('Pasajeros_muertos', null, ['class' => 'form-control']) !!}
</div>

<!-- Peatones Muertos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Peatones_muertos', 'Peatones Muertos:') !!}
    {!! Form::number('Peatones_muertos', null, ['class' => 'form-control']) !!}
</div>

<!-- Sexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Sexo', 'Sexo:') !!}
    {!! Form::text('Sexo', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Enervante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Tipo_enervante', 'Tipo Enervante:') !!}
    {!! Form::text('Tipo_enervante', null, ['class' => 'form-control']) !!}
</div>

<!-- Ruta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Ruta', 'Ruta:') !!}
    {!! Form::text('Ruta', null, ['class' => 'form-control']) !!}
</div>

<!-- Unidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Unidad', 'Unidad:') !!}
    {!! Form::text('Unidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('hechos.index') !!}" class="btn btn-default">Cancel</a>
</div>
