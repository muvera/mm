@extends('layouts.master')
@section('content')


<h1>Edit Role</h1>
{{Form::model($role ,['method'=>'PATCH', 'route'=>['roles.update', $role->id]])}}
		<!-- name -->
<div class="form-group">
		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name', null, ['class'=>'form-control']) }}
</div>


{{Form::submit()}}
{{Form::close()}}

@stop