<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function search()
	{
			$query = Request::get('q');

	if($query){
		// Try the Name 
		$artists = Artist::searchName($query)->get();
		if($artists->count()== 0)
			{
		// Try Alias
		$artists = Artist::searchAlias($query)->get();
			}
	}
	else{
		$artists = 0;
	}
						
	return View::make('pages.index')
		->with('artists',$artists);
	}

}
