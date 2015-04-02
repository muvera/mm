<!-- -->
@extends('layouts.master')
@section('content')

<h1>Edit Product</h1>
{{Form::model($product,['method'=>'PATCH', 'route'=>['products.update', $product->id]])}}
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


<!-- dropdown list -->
{{ Form::label('artist_id', 'Artist:') }}
<select class="form-control" name="artist_id">
@foreach($artists as $artist)
<option name="artist" value="{{$artist->id}}" type="text" >{{$artist->name}} - {{$artist->alias}}</option>
@endforeach
</select>


<!-- dropdown list -->
{{ Form::label('genre_id', 'Genres:') }}
<select class="form-control" name="genre_id">
@foreach($genres as $genre)
<option name="artist" value="{{$genre->id}}" type="text" >{{$genre->name}} - {{$genre->description}}</option>
@endforeach
</select>
<!-- dropdown list -->
{{ Form::label('cat_id', 'Show Case:') }}
<select class="form-control" name="cat_id">
@foreach($categories as $category)
<option name="artist" value="{{$category->id}}" type="text" >{{$category->name}} - {{$category->description}}</option>
@endforeach
</select>


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
	
{{Form::submit()}}
{{Form::close()}}

@stop