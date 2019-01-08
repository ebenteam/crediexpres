<div class="form-group">
<label>Fecha:</label>
<div class="input-group date">
<div class="input-group-addon">
<i class="fa fa-calendar"></i>
</div>
<input type="text" class="form-control pull-right" id="datepicker" name="fecha" value="{{ $creditos->fecha }}"/>
</div>
<!-- /.input group -->
</div>


<div class="form-group">
<label for="capital">Capital:</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-fw fa-usd"></i>
</div>
<input type="text" class="form-control" id="capital" placeholder="Ingresa Capital" name="capital" value="{{ $creditos->capital }}"/>
</div>
<span class="text-red">{{ $errors->first('capital') }}</span>
</div>


<div class="form-group">
<label for="interes">Tasa de interés:</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-fw fa-usd"></i>
</div>
<input type="text" class="form-control" id="interes" placeholder="Ingresa Tasa de interés" name="interes" value="{{ $creditos->interes }}"/>
</div>
<span class="text-red">{{ $errors->first('interes') }}</span>
</div>


<div class="form-group">
<label for="total">Total:</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-fw fa-usd"></i>
</div>
<input type="text" class="form-control" id="total" placeholder="Ingresa Total" name="total" value="{{ $creditos->total}}"/>
</div>
<span class="text-red">{{ $errors->first('total') }}</span>
</div>

<div class="form-group">
<label for="cuotas">Cuotas:</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-fw fa-usd"></i>
</div>
<input type="text" class="form-control" id="cuotas" placeholder="Ingresa Cuotas" name="cuotas" value="{{ $creditos->cuotas }}"/>
</div>
<span class="text-red">{{ $errors->first('cuotas') }}</span>
</div>


<div class="form-group">
<label for="plazo">Plazo:</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-fw fa-usd"></i>
</div>
<input type="text" class="form-control" id="plazo" placeholder="Ingresa Plazo" name="plazo" value="{{ $creditos->plazo }}"/>
</div>
<span class="text-red">{{ $errors->first('plazo') }}</span>
</div>


<div class="form-group">
<label>Frecuencia Pago:</label>
<select class="form-control select2 select2-hidden-accessible" id="fre_pago" style="width: 100%;" tabindex="-1" aria-hidden="true" name="fre_pago" value="{{ $creditos->fre_pago }}">
<option selected="selected">7</option>
<option>15</option>
<option>30</option>
</select>
</div>    

<div class="form-group">
<input type="hidden" class="form-control" id="clientes_id" placeholder="Ingresa persona_id" name="clientes_id" value="{{ $creditos->clientes_id }}"/>
</div>





<div class="box-body">
{{ Form::submit('Guardar', ['class' => 'btn btn-warning']) }}