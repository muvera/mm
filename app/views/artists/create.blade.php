@extends('layouts.master')
@section('content')

<h2>Crear Artista</h2>
{{Form::open(['route'=>'artists.store'])}}

		<!-- name -->
<div class="form-group">
		{{ Form::label('name', 'Nombre:') }}
		{{ Form::text('name', null, ['class'=>'form-control']) }}
</div>

		<!-- Description -->
<div class="form-group">
		{{ Form::label('alias', 'Alias:') }}
		{{ Form::text('alias', null, ['class'=>'form-control']) }}
</div>


{{Form::submit()}}
{{Form::close()}}

@stop
