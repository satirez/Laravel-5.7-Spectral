


<div class="row">
	<div class="col">
		<div class="form-group">
	{{ Form::label('name', 'Nombre') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'maxlength' => 30 , 'placeholder' => 'Juan/juana' ]) }}
</div>
	</div>
	<div class="col">
		<div class="form-group">
	{{ Form::label('apellidos', 'Apellido') }}
	{{ Form::text('apellidos', null, ['class' => 'form-control', 'id' => 'apellidos', 'maxlength' => 30 , 'placeholder' => 'Pérez']) }}
</div>
	</div>
</div>


<div class="row">
	<div class="col">
		<div class="form-group">
	{{ Form::label('email', 'Email') }}
	{{ Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'maxlength' => 50 , 'placeholder' => 'Ejemplo@ejemplo.cl']) }}
</div>
	</div>

</div>


<div class="row">
	<div class="col">
		<div class="form-group">
	{{ Form::label('rut', 'Rut') }}
	{{ Form::text('rut', null, ['class' => 'form-control', 'maxlength' =>  9, 'placeholder' => '11111111-1']) }}
</div>

	</div>
	<div class="col">
		
<div class="form-group">
	{{ Form::label('telefono', 'Telefono') }}
	{{ Form::number('telefono', null, ['class' => 'form-control', 'max' => 999999999 , 'placeholder' => '999999999']) }}
</div>
	</div>
</div>

<div class="row">
	<div class="col">
		<div class="form-group">
	{{ Form::label('Sexo') }} <br>
	{{ Form::radio('sexo', 'Hombre', true) }} {{ Form::label('Hombre') }}
	{{ Form::radio('sexo', 'Mujer', true) }} {{ Form::label('Mujer') }}
</div>
	</div>
	<div class="col">
		<div class="form-group">
	{{ Form::label('fechanacimiento', 'Fecha de Nacimiento') }}
	{{ Form::Date('fechanacimiento', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
</div>
	</div>
</div>


<div class="row">
	<div class="col">
		<div class="form-group">
	{{ Form::label('region_id', 'Region') }}
	{{ Form::select('region_id', $listaregiones, null, ['class' => 'form-control']) }}
</div>
	</div>
	<div class="col">
		<div class="form-group">
	{{ Form::label('comuna_id', 'Comuna') }}
	{{ Form::select('comuna_id', $listacomunas, null, ['class' => 'form-control']) }}
</div>
	</div>
</div>

<div class="form-group">
	{{ Form::label('direccion', 'Direccion') }}
	{{ Form::text('direccion', null, ['class' => 'form-control', 'maxlength' => 40, 'placeholder' => 'Ejemplo 312']) }}
</div>

<div class="row">
	<div class="col">
		<div class="form-group">
	{{ Form::label('nivelse_id', 'Nivel Socio Economico') }}
	{{ Form::select('nivelse_id', $nivelse, null, ['class' => 'form-control']) }}
</div>
	</div>
	<div class="col">
		<div class="form-group">
	{{ Form::label('fonasa_id', 'Fonasa') }}
	{{ Form::select('fonasa_id', $fonasa, null, ['class' => 'form-control']) }}
</div>
	</div>	
</div>

<div class="row">
	<div class="col">
		<div class="form-group">
	{{ Form::label('estado', 'Estado') }}
	{{ Form::select('estado', $listacomunas, null, ['class' => 'form-control']) }}
</div>
	</div>
	<div class="col">
		<div class="form-group">
	{{ Form::label('user_types_id', 'Tipo de Usuario') }}
	{{ Form::select('user_types_id', $categorias, null, ['class' => 'form-control']) }}
</div>
	</div>
</div>





<div class="form-group">
	{{ Form::label('institute_id', 'Institución') }}
	{{ Form::select('institute_id', $instituciones, null, ['class' => 'form-control']) }}
</div>

<hr>

<h3> Roles </h3>

<div class="form-group">
	
	<ul class="list-unstyled">

		
		@foreach($roles as $role)
			<li>
				<label>
					{{ Form::checkbox('roles[]', $role->id, null)  }}
					{{ $role->name}}
					<em>({{ $role->description ?: 'Sin Descripción' }})</em>
				</label>
			</li>
		@endforeach
	</ul>

</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>