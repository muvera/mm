@extends('layouts.master')
@section('content')
<!-- -->
<h1>Edit User</h1>
{{Form::model($user,['method'=>'PATCH', 'route'=>['users.update',$user->id]])}}
		<!-- name -->
<div class="form-group">
		{{ Form::label('username', 'username:') }}
		{{ Form::text('username', null, ['class'=>'form-control']) }}
</div>

		<!-- description -->
<div class="form-group">
		{{ Form::label('email', 'Email:') }}
		{{ Form::text('email', null, ['class'=>'form-control']) }}
</div>
	
{{Form::submit()}}
{{Form::close()}}

@stop