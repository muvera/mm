<?php

class ServicesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /services
	 *
	 * @return Response
	 */
	public function index()
	{
		//
			$services = Service::get();
				return View::make('services.index')
						->with('categories', $services);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /services/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /services
	 *
	 * @return Response
	 */
	public function store()
	{
		//

		$input = Input::get();

		$track_id = $input['track_id'];
		$service_id = $input['service_id'];

		$track = Track::find($track_id);

		$track->service()->attach($service_id);

		return Redirect::back();

		// $product = Product::find($product_id);
		// $product->video()->attach($video->id);
		


	}

	/**
	 * Display the specified resource.
	 * GET /services/{id}
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
	 * GET /services/{id}/edit
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
	 * PUT /services/{id}
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
	 * DELETE /services/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}