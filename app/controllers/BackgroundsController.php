<?php

class BackgroundsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /backgrounds
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /backgrounds/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		return View::make('backgrounds.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /backgrounds
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /backgrounds/{id}
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
	 * GET /backgrounds/{id}/edit
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
	 * PUT /backgrounds/{id}
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
	 * DELETE /backgrounds/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//

	}


	public function upload(){


	// get current user id
	$user = Auth::user();

	// Path
	$path = public_path('/uploads/company/'. $user->id);

	// check user folder
	if(file_exists($path)){
	// upload the image
	$input = Input::file('file');
	$input->getClientOriginalName();
	$input->move(public_path('/uploads/company/' . $user->id ), $input->getClientOriginalName());

	}else{
	// create folder and upload the image
	mkdir($path);
	$input = Input::file('file');
	$input->getClientOriginalName();
	$input->move(public_path('/uploads/company/' . $user->id ), $input->getClientOriginalName());

	}

	// Create new record
	$image = new Background;
	$image->file = $input->getClientOriginalName();
	$image->description = Input::get('description');
	$image->save();

	// Attach record
	$user->backgrounds()->attach($image->id);

	return Redirect::to('/profiles');
	}




}