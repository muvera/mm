<?php

class VideosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /videos
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /videos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /videos
	 *
	 * @return Response
	 */
	public function store()
	{

		// Save Data
		$input = Input::get();
		
		$video = new Video;
		$video->name = $input['name'];
		$video->code = $input['code'];
		$video->save();

		// Get Id's 
		$product_id = $input['product_id'];
		$track_id = $input['track_id'];
		$service_id = $input['service_id'];
		$type_id = $input['type_id'];

		// Attach the video to product, track, service, & type
		$product = Product::find($product_id);
		$product->video()->attach($video->id);

		$product = Track::find($track_id);
		$product->video()->attach($video->id);

		$product = Service::find($service_id);
		$product->video()->attach($video->id);

		$product = Type::find($type_id);
		$product->video()->attach($video->id);


		return Redirect::back();
	}

	/**
	 * Display the specified resource.
	 * GET /videos/{id}
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
	 * GET /videos/{id}/edit
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
	 * PUT /videos/{id}
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
	 * DELETE /videos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}