

<div class="row">
	<div class="col">
		<div class="form-group">
			{{ Form::label('psicologo_id', 'Psicologos') }}
			{{ Form::select('psicologo_id',$psicologos , null, ['class' => 'form-control', 'placeholder' => 'Seleccione un Psicologo', 'id' => 'psicologo_id']) }}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{{ Form::label('paciente_id', 'Paciente') }}
			{{ Form::select('paciente_id',$pacientes , null, ['class' => 'form-control', 'placeholder' => 'Seleccione un Paciente','id' => 'paciente_id']) }}
		</div>
	</div>
</div>


<div class="row">
	<div class="col">
	</div>
	<div class="col">
		<div class="form-group">
			{{ Form::label('terapia_id', 'Terapia') }}
			{{ Form::select('terapia_id',$terapia , null, ['class' => 'form-control', 'placeholder' => 'Seleccione un Terapia']) }}
		</div>
	</div>
</div>

<div class="row">
	<div class="col">
		<div class="form-group">
			{{ Form::label('start_date', 'Fecha inicio') }}
			{{ Form::date('start_date', \Carbon\Carbon::now(), ['class' => 'form-control'])}}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{{ Form::label('end_date', 'Fecha fin') }}
			{{ Form::date('end_date', \Carbon\Carbon::now(),['class' => 'form-control'])}}
		</div>
	</div>
</div>


<div class="row">
	<div class="col">
		<div class="form-group">
			{{ Form::label('motivoconsulta', 'Motivo de la Consulta') }}
			{{ Form::text('motivoconsulta', null, ['class' => 'form-control']) }}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{{ Form::label('diagnostico', 'Diagnostico') }}
			{{ Form::text('diagnostico', null, ['class' => 'form-control']) }}
		</div>
	</div>
</div>


<div class="row">
	<div class="col">
		<div class="form-group">
			{{ Form::label('Medicado') }} <br>
			{{ Form::radio('medicado', 'Si', true) }} {{ Form::label('Si') }}
			{{ Form::radio('medicado', 'No', true) }} {{ Form::label('No') }}
		</div>

	</div>
	<div class="col">
		<div class="form-group">
			{{ Form::label('derivadode_id', 'Derivado de') }}
			{{ Form::select('derivadode_id',$derivado , null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opción']) }}
		</div>
	</div>
</div>



<div class="row">
	<div class="col">
		<div class="form-group">
			{{ Form::label('sexualorientation_id', 'Orientación Sexual') }}
			{{ Form::select('sexualorientation_id',$genero , null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opción']) }}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{{ Form::label('civilstate_id', 'Estado Civil') }}
			{{ Form::select('civilstate_id',$estadocivil , null, ['class' => 'form-control', 'placeholder' => 'Seleccione un Terapia']) }}
		</div>
	</div>
</div>

<div class="row">
	<div class="col">
		<div class="form-group">
			{{ Form::label('Alta') }} <br>
			{{ Form::radio('alta', 'Administrativa', true) }} {{ Form::label('Administrativa') }}
			{{ Form::radio('alta', 'Integral', false) }} {{ Form::label('Integral') }}
			{{ Form::radio('alta', 'Terapeutica', false) }} {{ Form::label('Terapeutica') }}
			{{ Form::radio('alta', 'Ninguna', false) }} {{ Form::label('Ninguna') }}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{{ Form::label('severidad', 'Severidad') }}
			{{ Form::text('severidad', null, ['class' => 'form-control']) }}
		</div>
	</div>
</div>


<hr>


<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-raised btn-primary']) }}
</div>