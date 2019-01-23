


<div class="form-group">
<label>Fecha:</label>
<div class="input-group date">
<div class="input-group-addon">
<i class="fa fa-calendar"></i>
</div>
<input type="text" class="form-control pull-right" id="datepicker" name="fecha" value="{{ $now->format('Y-m-d') }}"/>
</div>

</div>


<div class="form-group">
<label for="cuota">Cuota:</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-fw fa-usd"></i>
</div>
<input type="text" class="form-control" id="cuota" placeholder="Ingresa Valor Cuota" name="cuota"/>
</div>
<span class="text-red">{{ $errors->first('cuota') }}</span>
</div>

<div class="form-group">
<label>Tipo Cuota:</label>
<select class="form-control" id="tipo_cuota" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tipo_cuota">
<option selected="selected" value= "1" >Normal</option>
<option  value= "2" >Interes</option>
</select>
<span class="text-red">{{ $errors->first('tipo_cuota') }}</span>
</div>   

<div class="form-group">
<input type="hidden" class="form-control" id="creditos_id" placeholder="Id del credito" name="creditos_id" value="{{ $creditos->id }}"/>
</div>

<div class="form-group">
<input type="hidden" class="form-control" id="usuario" placeholder="Id del credito" name="usuario" value="{{ Auth::user()->name }}"/>
</div>


<div class="box-body">
{{ Form::submit('Guardar', ['class' => 'btn btn-warning']) }}