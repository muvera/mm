@extends('layouts.master')
@section('content')

<h2>Crear Generos</h2>
{{Form::open(['route'=>'genres.store'])}}

		<!-- name -->
<div class="form-group">
		{{ Form::label('name', 'Nombre:') }}
		{{ Form::text('name', null, ['class'=>'form-control']) }}
</div>

		<!-- Description -->
<div class="form-group">
		{{ Form::label('description', 'Dsescripción:') }}
		{{ Form::textarea('description', null, ['class'=>'form-control']) }}
</div>


{{Form::submit()}}
{{Form::close()}}

@stop
