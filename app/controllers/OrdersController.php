<?php

class OrdersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /orders
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$user = Auth::user();
		$orders = $user->orders()->get();
		return View::make('orders.index')
				->with('orders', $orders);
	}
	

	/**
	 * Show the form for creating a new resource.
	 * GET /orders/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /orders
	 *
	 * @return Response
	 */
	public function store()
	{
		// Identify
		$store = User::where('username', '=', Session::get('username'))->first();
		$customer = Auth::user();
		
		// Create new Order
		$order = new Order;
		$order->store_id = $store->id;
		// Vefify token for the order confirmation
		$order->verify = rand();
		$order->products = serialize(Session::get('products'));
		$order->save();
		
		// Attach order to user
		$customer->orders()->attach($order->id);
		// Attach order to store
		$store->orders()->attach($order->id);

		// Clear Session
		Session::forget('products');
		
		return Redirect::to('/orders');
	}

	/**
	 * Display the specified resource.
	 * GET /orders/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /orders/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /orders/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /orders/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	// VERIFY THE ORDER
		public function verify($id, $verify)
	{
		//
		$order = Order::where('id', '=', $id)->first();
		if($order->verify == $verify){
			$order->status = '1';
			$order->save();
		}else{
			dd('this order is not valid or it has been deleted');
		}

		return Redirect::to('/orders');

	}

}