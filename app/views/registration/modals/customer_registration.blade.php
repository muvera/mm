

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#register">
  Crear Cuenta
</button>

<!-- Modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva Cuenta</h4>
      </div>
      <div class="modal-body">


<div class="well">
{{Form::open(['route'=>'registration.store'])}}
{{Form::hidden('role', 'customer')}}
		<!-- username -->
<!-- <div class="form-group">
		{{ Form::label('username', 'User Name:') }}
		{{ Form::text('username', null, ['class'=>'form-control', 'required'=>'required']) }}
		{{ $errors->first('username', '<span class="error">:message</span>') }}
</div> -->

	<!-- email Field-->
	<div class="form-group">
			{{ Form::label('email', 'Email:')}}
			{{ Form::text('email', null, ['class'=>'form-control', 'required'=>'required']) }}
			{{ $errors->first('email', '<span class="error">:message</span>')}}
	</div>

			<!-- password -->
	<div class="form-group">
			{{ Form::label('password', 'Password:') }}
			{{ Form::password('password', ['class'=>'form-control', 'required'=>'required']) }}
			{{ $errors->first('password', '<span class="error">:message</span>')}}
	</div>

			<!-- password -->
	<div class="form-group">
			{{ Form::label('password_confirmation', 'Password:') }}
			{{ Form::password('password_confirmation', ['class'=>'form-control', 'required'=>'required']) }}
	</div>


</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Crear Cuenta</button>
        {{Form::close()}}
      </div>
    </div>
  </div>
</div>
<!-- Modal Ends -->



