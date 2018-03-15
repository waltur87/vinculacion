<!-- Nombre Comun Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_comun', 'Nombre Comun:') !!}
    {!! Form::text('nombre_comun', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Cientifico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_cientifico', 'Nombre Cientifico:') !!}
    {!! Form::text('nombre_cientifico', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tipoVegetals.index') !!}" class="btn btn-default">Cancel</a>
</div>
