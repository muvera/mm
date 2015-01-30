@extends('layouts.master')
@section('content')

<h1>Create New Role</h1>
{{Form::open(['route'=>'roles.store'])}}

		<!-- name -->
<div class="form-group">
		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name', null, ['class'=>'form-control']) }}
</div>

{{Form::submit()}}
{{Form::close()}}


@stop
