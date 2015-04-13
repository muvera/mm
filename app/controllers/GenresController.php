<?php

class GenresController extends \BaseController {


	// FILTER
	 public function __construct() {
        $this->beforeFilter('auth', array('except' => array('index', 'show')));
        }
        
	/**
	 * Display a listing of the resource.
	 * GET /genres
	 *
	 * @return Response
	 */
	public function index()
	{
		// Get logged user
		$user = Auth::user();
		// Get logged user genres
		$genres = $user->genres()->get();
				return View::make('genres.index')
						->with('genres', $genres);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /genres/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('genres.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /genres
	 *
	 * @return Response
	 */
	public function store()
	{
		// Current Logged User
			$user = Auth::user();


			$input = Input::get();
				if(!['name']) dd('You need a name');

		// Create new Record
				$genre = new Genre;
				$genre->name = $input['name'];
				$genre->description = $input['description'];
				$genre->save();

		// Atach to Current User
			$user->genres()->attach($genre->id);


				return Redirect::to('/genres');
	}

	/**
	 * Display the specified resource.
	 * GET /genres/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		if(!Session::get('username')){
		return Redirect::to('/');
		}
		$username = Session::get('username');
		$user = User::where('username', '=', $username)->first();
		$genre = Genre::findOrFail($id);
		Session::put('cat_id', $id);
		$products = Product::where('cat_id', '=', $id)->get();
		
				return View::make('genres.show')
					->with('genre',$genre)
					->with('user', $user)
					->with('products',$products );
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /genres/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
			$genre = Genre::findOrFail($id);
		
				return View::make('genres.edit')
						->with('genre',$genre );
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /genres/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$input = Input::get();
		$genre = Genre::findOrFail($id);
			$genre->name = $input['name'];
			$genre->description = $input['description'];
			$genre->save();
		
				return Redirect::to('genres/');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /genres/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$genre = Genre::findOrFail($id);
				$genre->delete();
				return Redirect::to('/genres');
	}

}