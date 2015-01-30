<?php

class RolesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /roles
	 *
	 * @return Response
	 */
	public function index()
	{
				$roles = Role::get();
				return View::make('roles.index')
						->with('roles',$roles);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /roles/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		return View::make('roles.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /roles
	 *
	 * @return Response
	 */
	public function store()
	{
		//
			$input = Input::get();
				if(!['name']) dd('You need a name');
				$role = new Role;
				$role->name = $input['name'];
				$role->save();
		
				return Redirect::to('/roles');
	}

	/**
	 * Display the specified resource.
	 * GET /roles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$role = Role::findOrFail($id);
		
				return View::make('roles.show')
					->with('role', $role);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /roles/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//

			$role = Role::findOrFail($id);
		
				return View::make('roles.edit')
						->with('role', $role);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /roles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//

			$input = Input::get();
			$role = Role::findOrFail($id);
				$role->name = $input['name'];
				$role->save();
		
				return Redirect::to('/roles/'. $role->id);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /roles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
			$role = Role::findOrFail();
			$role->delete();
				return Redirect::to('/roles');
	}

}