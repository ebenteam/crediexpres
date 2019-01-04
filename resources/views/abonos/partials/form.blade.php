


<div class="form-group">
<label>Fecha:</label>
<div class="input-group date">
<div class="input-group-addon">
<i class="fa fa-calendar"></i>
</div>
<input type="text" class="form-control pull-right" id="datepicker" name="fecha" value="{{ $now->format('Y-m-d') }}"/>
</div>
<!-- /.input group -->
</div>


<div class="form-group">
<label for="cuota">Cuota:</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-fw fa-usd"></i>
</div>
<input type="text" class="form-control" id="cuota" placeholder="Ingresa Valor Cuota" name="cuota"/>
</div>
</div>


<div class="form-group">
<label for="tipo_cuota">Tipo Cuota:</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-fw fa-usd"></i>
</div>
<input type="text" class="form-control" id="tipo_cuota" placeholder="Ingresa Tipo de cuota" name="tipo_cuota"/>
</div>
</div>

<div class="form-group">
<input type="hidden" class="form-control" id="creditos_id" placeholder="Id del credito" name="creditos_id" value="{{ $creditos->id }}"/>
</div>

<div class="form-group">
<input type="hidden" class="form-control" id="usuario" placeholder="Id del credito" name="usuario" value="{{ Auth::user()->name }}"/>
</div>


<div class="box-body">
{{ Form::submit('Guardar', ['class' => 'btn btn-warning']) }}