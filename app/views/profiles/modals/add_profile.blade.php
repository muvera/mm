<div class="well">
<h4>Billing</h4>
{{Form::open(['route'=>'profiles.store'])}}
{{Form::hidden('business', '')}}
{{Form::hidden('contact', '')}}

		<!-- name -->
<div class="form-group">
		{{ Form::label('name', 'Nombre:') }}
		{{ Form::text('name', null, ['class'=>'form-control']) }}
</div>

		<!-- last -->
<div class="form-group">
		{{ Form::label('last', 'Apellido:') }}
		{{ Form::text('last', null, ['class'=>'form-control']) }}
</div>

		<!-- address -->
<div class="form-group">
		{{ Form::label('address', 'Domicilio:') }} (Address)
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
		{{ Form::label('state', 'Estado:') }}
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

<button type="submit" class="btn btn-primary">Submit</button>

{{Form::close()}}

</div>