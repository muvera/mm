<div class="well">
   <h1>Register</h1>
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

	<!-- Create Account Field -->
	
	<div class="form-group">
			{{ Form::submit('Create Account', ['class'=>'btn btn-primary', 'required'=>'required'])}}
	</div>
	

{{Form::close()}}

</div>

