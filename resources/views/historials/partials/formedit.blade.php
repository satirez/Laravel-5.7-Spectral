

<div class="form-group">
	{{ Form::hidden('sesion_id', $sesion_id) }}
</div>

<div class="form-group">
	{{ Form::label('asistencia_id', 'Asistencia') }}
	{{ Form::select('asistencia_id', $asistencia, null, ['class' => 'form-control','placeholder' => 'seleccione una opción']) }}
</div>

<div class="form-group">
		{{ Form::label('start_date', 'Inicio') }}
		<input class="form-control" type="datetime-local" id="start_date"
       name="start_date" value="">
        {{ date('d-m-Y H:i', strtotime($historialid->start_date))}}

</div>
<em> Favor de tener en cuenta que cada sesión dura 1 HORA</em>
<div class="form-group ">
		{{ Form::label('end_date', 'Fin') }}
		<input class="form-control" type="datetime-local" id="end_date"
       name="end_date">
		       {{ date('d-m-Y H:i', strtotime($historialid->start_date))}}

       @php
       	
       @endphp
</div>

<hr>

 <script src="https://cdn.jsdelivr.net/bootstrap.datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>