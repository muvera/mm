@extends('layouts.master')
@section('content')

{{Form::open(['route'=>'backgroundupload', 'files'=> true])}}

		<!-- Thumbnail -->
<div class="form-group">
		{{ Form::label('file', 'Thumbnail:') }}
		{{ Form::file('file') }}
</div>


		<!-- description -->
<div class="form-group">
		{{ Form::label('description', 'Descripsion:') }}
		{{ Form::text('description', null, ['class'=>'form-control']) }}
</div>


<button type="submit" class="btn btn-defatul">Upload</button>
{{Form::close()}}

@stop