

<div class="form-group">
<label for="nombres">Nombres:</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-fw fa-usd"></i>
</div>
<input type="text" class="form-control" id="nombres" placeholder="Ingresa Nombres" name="nombres" value="{{ old('nombres') }}"/>
</div>
<span class="text-red">{{ $errors->first('nombres') }}</span>
</div>


<div class="form-group">
<label for="apellidos">Apellidos:</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-fw fa-usd"></i>
</div>
<input type="text" class="form-control" id="apellidos" placeholder="Ingresa Apellidos" name="apellidos" value="{{ old('apellidos') }}"/>
</div>
<span class="text-red">{{ $errors->first('apellidos') }}</span>
</div>


<div class="form-group">
<label for="dir_casa">Direccion Casa:</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-fw fa-usd"></i>
</div>
<input type="text" class="form-control" id="dir_casa" placeholder="Ingresa Direccion Casa" name="dir_casa" value="{{ old('dir_casa') }}"/>
</div>
<span class="text-red">{{ $errors->first('dir_casa') }}</span>
</div>


<div class="form-group">
<label for="dir_trabajo">Direccion Trabajo:</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-fw fa-usd"></i>
</div>
<input type="text" class="form-control" id="dir_trabajo" placeholder="Ingresa Direccion Trabajo" name="dir_trabajo" value="{{ old('dir_trabajo') }}"/>
</div>
<span class="text-red">{{ $errors->first('dir_trabajo') }}</span>
</div>


<div class="form-group">
<label for="cel_uno">Celular Principal:</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-fw fa-usd"></i>
</div>
<input type="text" class="form-control" id="cel_uno" placeholder="Ingresa Celular Principal" name="cel_uno" value="{{ old('cel_uno') }}"/>
</div>
<span class="text-red">{{ $errors->first('cel_uno') }}</span>
</div>

<div class="form-group">
<label for="cel_dos">Celular Secundario:</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-fw fa-usd"></i>
</div>
<input type="text" class="form-control" id="cel_dos" placeholder="Ingresa Celular Secundario" name="cel_dos" value="{{ old('cel_dos') }}"/>
</div>
<span class="text-red">{{ $errors->first('cel_dos') }}</span>
</div>

<div class="box-body">
{{ Form::submit('Guardar', ['class' => 'btn btn-warning']) }}


