@extends('layouts.master')
@section('content')
<h3>Mi Musica</h3>
@foreach($orders as $key=>$order)
<div class="well">
@if(!$order->status == '1')
@include('payments.paypal')<br>
@endif

@if(Auth::user()->roles()->first()->name == 'member')
	@include('orders.roles.member')
@endif


@if(Auth::user()->roles()->first()->name == 'customer')
	@include('orders.roles.customer')
@endif


	@if($order->products)
		<?php $items = unserialize($order->products); ?>
		<div class="row">
		@foreach($items as $key=>$item)
		<div class="col-md-3">{{$item['name']}}</div>
		<div class="col-md-3">{{$item['album']}}</div>
		<div class="col-md-3">{{$item['artist']}}</div>
		<div class="col-md-3"> <?php $track = Track::where('id','=', $item['id'])->first(); ?> @include('payments.download') </div>
		@endforeach
	</div>
	@endif
</div>
@endforeach

@stop