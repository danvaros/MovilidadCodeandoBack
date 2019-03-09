<!-- Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuario', 'Usuario:') !!}
    {!! Form::text('usuario', null, ['class' => 'form-control']) !!}
</div>

<!-- Tuit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tuit', 'Tuit:') !!}
    {!! Form::text('tuit', null, ['class' => 'form-control']) !!}
</div>

<!-- Liga Field -->
<div class="form-group col-sm-6">
    {!! Form::label('liga', 'Liga:') !!}
    {!! Form::text('liga', null, ['class' => 'form-control']) !!}
</div>

<!-- Short Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('short_url', 'Short Url:') !!}
    {!! Form::text('short_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Comenatario1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comenatario1', 'Comenatario1:') !!}
    {!! Form::text('comenatario1', null, ['class' => 'form-control']) !!}
</div>

<!-- Comentario2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comentario2', 'Comentario2:') !!}
    {!! Form::text('comentario2', null, ['class' => 'form-control']) !!}
</div>

<!-- Comentario3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comentario3', 'Comentario3:') !!}
    {!! Form::text('comentario3', null, ['class' => 'form-control']) !!}
</div>

<!-- Comentario4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comentario4', 'Comentario4:') !!}
    {!! Form::text('comentario4', null, ['class' => 'form-control']) !!}
</div>

<!-- Comentario5 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comentario5', 'Comentario5:') !!}
    {!! Form::text('comentario5', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('atropellados.index') !!}" class="btn btn-default">Cancel</a>
</div>
