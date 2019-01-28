


<div class="form-group">
	{{ Form::label('description', 'Description') }}
	{{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'email']) }}
</div>



<hr>



<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>