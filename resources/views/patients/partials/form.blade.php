



<div class="form-group">
	{{ Form::label('name', 'Nombre') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>


<div class="form-group">
	{{ Form::label('apellidos', 'Apellido') }}
	{{ Form::text('apellidos', null, ['class' => 'form-control', 'id' => 'apellidos']) }}
</div>

<div class="form-group">
	{{ Form::label('email', 'Email') }}
	{{ Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) }}
</div>

<div class="form-group">
	{{ Form::label('password', 'Contraseña') }}
	{{ Form::password('password', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('rut', 'Rut') }}
	{{ Form::text('rut', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('telefono', 'Telefono') }}
	{{ Form::number('telefono', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('Sexo') }} <br>
	{{ Form::radio('sexo', 'Hombre', true) }} {{ Form::label('Hombre') }}
	{{ Form::radio('sexo', 'Mujer', true) }} {{ Form::label('Mujer') }}
</div>

<div class="form-group">
	{{ Form::label('fechanacimiento', 'Fecha de Nacimiento') }}
	{{ Form::Date('fechanacimiento', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('region', 'Region') }}
	{{ Form::select('region', $listaregiones, null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('comuna', 'Comuna') }}
	{{ Form::select('comuna', $listacomunas, null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('direccion', 'Direccion') }}
	{{ Form::text('direccion', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('nivelse', 'Nivel Socio Economico') }}
	{{ Form::select('nivelse', $listacomunas, null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('fonasa', 'Fonasa') }}
	{{ Form::select('fonasa', $listacomunas, null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('estado', 'Estado') }}
	{{ Form::select('estado', $listacomunas, null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::hidden('user_types_id', '5') }}
</div>

<div class="form-group">
	{{ Form::label('institute_id', 'Institución') }}
	{{ Form::select('institute_idinstitute_id', $instituciones, null, ['class' => 'form-control']) }}
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