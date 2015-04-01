<?php

class ProfilesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /profiles
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		
		$user = Auth::user();
		$profile = $user->profiles()->first();

		//Profile Exists than send grab it and send it to the view
		return View::make('profiles.index')
				->with('profile',$profile);


	}

	/**
	 * Show the form for creating a new resource.
	 * GET /profiles/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$user = Auth::user();
		if($user->profiles()->first()){
		return Redirect::to('/profiles/');
		}else{
		return View::make('profiles.create');	
		}
		
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /profiles
	 *
	 * @return Response
	 */
	public function store()
	{

		// get current user
		$user = Auth::user();

		// get data
		$input = Input::get();

		// create record
		$profile = new Profile;
		$profile->business = $input['business'];
		$profile->name = $input['name'];
		$profile->last = $input['last'];
		$profile->contact = $input['contact'];
		$profile->address = $input['address'];
		$profile->address2 = $input['address2'];
		$profile->city = $input['city'];
		$profile->state = $input['state'];
		$profile->zip = $input['zip'];
		$profile->country = $input['country'];
		$profile->save();

		// Link it to user
		$user->profiles()->attach($profile->id);

		return Redirect::back();
		
	}

	/**
	 * Display the specified resource.
	 * GET /profiles/{id}
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
	 * GET /profiles/{id}/edit
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
	 * PUT /profiles/{id}
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
	 * DELETE /profiles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}