	<?php $customer = User::where('id', '=', $order->store_id)->first(); ?>
	{{$customer->profiles()->first()->name}} {{$customer->profiles()->first()->last}} Order ID# {{$order->id}}