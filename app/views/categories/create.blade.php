
@extends('layouts.master')
@section('content')

<h2>Nueva Categoría</h2>
{{Form::open(['route'=>'categories.store'])}}

		<!-- name -->
<div class="form-group">
		{{ Form::label('name', 'Nombre:') }}
		{{ Form::text('name', null, ['class'=>'form-control']) }}
</div>

		<!-- Description -->
<div class="form-group">
		{{ Form::label('description', 'Descripción:') }}
		{{ Form::text('description', null, ['class'=>'form-control']) }}
</div>




{{Form::submit()}}
{{Form::close()}}

@stop
