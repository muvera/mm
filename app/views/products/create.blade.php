@extends('layouts.master')
@section('content')
<!-- -->
<div class="row">
	<div class="col-md-6">
	


	<h2>Crear Album</h2>
{{Form::open(['route'=>'products.store'])}}

		<!-- name -->
<div class=name"form-group">
		{{ Form::label('name', 'Album:') }}
		{{ Form::text('name', null, ['class'=>'form-control']) }}
</div>
<!-- dropdown list -->
{{ Form::label('artist_id', 'Artista:') }}
<select class="form-control" name="artist_id">
@foreach(Auth::user()->artists()->get() as $artist)
<option name="artist" value="{{$artist->id}}" type="text" >{{$artist->name}} - {{$artist->alias}}</option>
@endforeach
</select>

<!-- dropdown list -->
{{ Form::label('genre_id', 'Genro:') }}
<select class="form-control" name="genre_id">
@foreach(Auth::user()->genres()->get() as $genre)
<option name="artist" value="{{$genre->id}}" type="text" >{{$genre->name}} - {{$genre->description}}</option>
@endforeach
</select>

<!-- dropdown list -->
{{ Form::label('cat_id', 'Categoria:') }}
<select class="form-control" name="cat_id">
@foreach(Auth::user()->categories()->get() as $category)
<option name="artist" value="{{$category->id}}" type="text" >{{$category->name}} - {{$category->description}}</option>
@endforeach
</select>



		<!-- description -->
<div class="form-group form">
		{{ Form::label('description', 'Description:') }}
		{{ Form::textarea('description', null, ['class'=>'form-control', 'rows'=>'3']) }}
</div>

		<!-- catalog -->
<div class="form-group">
		{{ Form::label('catalog', 'Catalog Number:') }}
		{{ Form::text('catalog', null, ['class'=>'form-control']) }}
</div>

		<!-- barcode -->
<div class="form-group">
		{{ Form::label('barcode', 'Barcode Number:') }}
		{{ Form::text('barcode', null, ['class'=>'form-control']) }}
</div>



<button class="btn btn-success btn-lg" type="submit">Submit</button>
	




	</div>
	<div class="col-md-6">
		<h2>Video Imagen</h2>	
		
@foreach(Auth::user()->backgrounds()->get() as $image)

<div class="radio">
  <label>
    <input type="radio" name="background_id" id="{{$image->id}}" value="{{$image->id}}" checked>
    <img src="{{asset('uploads/company/' . Auth::user()->id . '/' . $image->file)}}" alt="$image->file" width="300" class="img-responsive">
  </label>
</div>
  

@endforeach

{{Form::close()}}	



	</div>
</div>




@stop

