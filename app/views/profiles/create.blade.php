@extends('layouts.master')
@section('content')


<h4>Crear Perfil</h4>
{{Form::open(['route'=>'profiles.store'])}}
		<!-- Business -->
<div class="form-group">
		{{ Form::label('business', 'Business:') }}
		{{ Form::text('business', null, ['class'=>'form-control']) }}
</div>

		<!-- Contact -->
<div class="form-group">
		{{ Form::label('contact', 'Contact:') }}
		{{ Form::text('contact', null, ['class'=>'form-control']) }}
</div>

		<!-- address -->
<div class="form-group">
		{{ Form::label('address', 'Domicilio:') }}
		{{ Form::text('address', null, ['class'=>'form-control']) }}
</div>

		<!-- address2 -->
<div class="form-group">
		{{ Form::label('address2', 'Apt:') }}
		{{ Form::text('address2', null, ['class'=>'form-control']) }}
</div>

		<!-- city -->
<div class="form-group">
		{{ Form::label('city', 'Ciudad:') }}
		{{ Form::text('city', null, ['class'=>'form-control']) }}
</div>

		<!-- state -->
<div class="form-group">
		{{ Form::label('state', 'State:') }}
		{{ Form::text('state', null, ['class'=>'form-control']) }}
</div>

		<!-- zip -->
<div class="form-group">
		{{ Form::label('zip', 'Codigo Postal:') }}
		{{ Form::text('zip', null, ['class'=>'form-control']) }}
</div>

		<!-- country -->
<div class="form-group">
		{{ Form::label('country', 'Pais:') }}
		{{ Form::text('country', null, ['class'=>'form-control']) }}
</div>

<button type="submit" class="bnt btn-primary btn-lg">Submit</button>

{{Form::close()}}

@stop