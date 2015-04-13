<?php

class WebsitesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /websites/
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /websites/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /websites
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /websites/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($username)
	{
		$user = User::where('username', '=', $username)->first();
		Session::put('username', $username);
		return View::make('websites.show')
				->with('user', $user);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /websites/{id}/edit
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
	 * PUT /websites/{id}
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
	 * DELETE /websites/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	
	# API
	public function api($username)
	{

		$user = User::where('username', '=', $username)->first();
        $products = $user->products()->where('active', '=', '1')->get();
        header('Access-Control-Allow-Origin: *');
        return Response::json(array('products'=>$products->toArray()))->setCallback(Input::get('callback'));

	}

}