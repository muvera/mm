<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
				$users = User::get();
				return View::make('users.index')
						->with('users',$users);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		return View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		//
			$input = Input::get();
				if(!['name']) dd('You need a name');
				$user = new User;
				$user->name = $input['name'];
				$user->save();

		// Assing a "customer" role
				$user->roles()->attach(3);


		// Check for a store
				if(Session::get('username')){
					// get User Id
					$customer = $user->id;
					// get store id
					$store = User::where('username', '=', Session::get('username'));
					
					// check for relation ship
					Bucket::where('customer_id', '=',$customer)->get();

					// assing store
				}else{

				}
				return Redirect::to('/users');

	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$user = User::findOrFail($id);
		
				return View::make('users.show')
					->with('user', $user);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//

			$user = User::findOrFail($id);
		
				return View::make('users.edit')
						->with('user', $user);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//

			$input = Input::get();
			$user = User::findOrFail($id);
				$user->name = $input['name'];
				$user->save();
		
				return Redirect::to('/users/'. $user->id);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
			$user = User::findOrFail();
			$user->delete();
				return Redirect::to('/users');
	}

}