<h1>Edit Category</h1>
{{Form::model($perfil,['method'=>'PATCH', 'route'=>['categories.update',$perfil->id]])}}
		<!-- name -->
<div class="form-group">
		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name', null, ['class'=>'form-control']) }}
</div>

		<!-- description -->
<div class="form-group">
		{{ Form::label('description', 'Description:') }}
		{{ Form::textarea('description', null, ['class'=>'form-control']) }}
</div>
	
{{Form::submit()}}
{{Form::close()}}