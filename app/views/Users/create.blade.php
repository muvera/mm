@extends('layouts.master')
@section('content')

<h1>Login</h1>

	{{ Form::open(array('route' => 'sessions.store')) }}
				<!-- email -->
		<div class="form-group">
				{{ Form::label('email', 'Email:') }}
				{{ Form::text('email', null, ['class'=>'form-control']) }}
		</div>

				<!-- password -->
		<div class="form-group">
				{{ Form::label('password', 'Password:') }}
				{{ Form::password('password', null, ['class'=>'form-control']) }}
		</div>

		
		<button type='submit' >Submit</button>
	{{ Form::close() }}

	@stop