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


  </div>
</div>

@if(Session::get('username'))
<a href="/{{Session::get('username')}}" class="btn btn-block btn-default">Regresa a {{Session::get('username')}} </a>
@endif
@stop