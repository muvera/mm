@extends('layouts.master')
@section('content')

<div class="panel panel-default">
  <div class="panel-body">

<h3>Shopping Cart</h3>

<div class="row">
@foreach($products as $key=>$product)
<div class="col-md-3">
	<strong>Num</strong><br>
	{{$product['number']}}
</div>
<div class="col-md-3">
	<strong>Artist</strong><br>
	{{$product['name']}}
</div>
<div class="col-md-3">
	<strong>Album</strong><br>
	{{$product['album']}}
</div>
<div class="col-md-3">
	<strong>Track</strong><br>
	{{$product['name']}}
</div>
<hr>
@endforeach
</div>

<hr>
<div class="row">
	<div class="col-md-6"><button type="submit" class="btn btn-default btn-sm">Delete Cart</button></div>
	<div class="col-md-6">
		
		@if(Auth::user())
			
			@if(!Auth::user()->profiles()->first())
				@include('profiles.modals.add_profile')
			@else
				@include('payments.checkout')
			@endif
		@else
			@include('registration.modals.customer_registration')
		@endif

	</div>
</div>

{{Form::open(['route'=>'delete'])}}

{{Form::close()}}

  </div>
</div>




@stop