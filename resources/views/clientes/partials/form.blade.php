
<div class="form-group">
{{ Form::label('nombres', 'Nombres:') }}
{{ Form::text('nombres', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
{{ Form::label('apellidos', 'Apellidos:') }}
{{ Form::text('apellidos', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
{{ Form::label('dir_casa', 'Direccion Casa:') }}
{{ Form::text('dir_casa', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
{{ Form::label('dir_trabajo', 'Direccion Trabajo:') }}
{{ Form::text('dir_trabajo', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
{{ Form::label('cel_uno', 'Celular Principal:') }}
{{ Form::text('cel_uno', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
{{ Form::label('cel_dos', 'Celular Secundario:') }}
{{ Form::text('cel_dos', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
{{ Form::submit('Guardar', ['class' => 'btn btn-warning']) }}
</div>

