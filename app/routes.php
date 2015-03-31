<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {

// 	// $user = new User;
// 	// $user->username = 'administrator';
// 	// $user->email = 'muvera@gmail.com';
// 	// $user->password = Hash::make('admin123');
// 	// $user->save();

// 	// dd($user->id);

// // Attach Roles

// // $id = Auth::user()->id;

// // $user = User::findOrfail($id);
// // $user->roles()->attach(1);
// // dd('ok');





// 	$query = Request::get('q');

// 	if($query){
// 		// Try the Name 
// 		$artists = Artist::searchName($query)->get();
// 		if($artists->count()== 0)
// 			{
// 		// Try Alias
// 		$artists = Artist::searchAlias($query)->get();
// 			}
// 	}
// 	else{
// 		$artists = 0;
// 	}
						
// 	return View::make('pages.index')
// 		//->with('artists',$artists);
// });

Route::get('/', ['as'=>'home', 'uses'=>'PagesController@index']);

Route::resource('categories', 'CategoriesController');
Route::resource('products', 'ProductsController');
Route::post('upload', ['as'=>'upload', 'uses'=>'ProductsController@upload'])->before('auth');
Route::resource('artists', 'ArtistsController');
Route::resource('genres', 'GenresController');
// ADMIN
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController');

Route::get('search', ['as'=>'search', 'uses'=>'search@HomeController']);

Route::resource('tracks', 'TracksController');
Route::post('trackupload', ['as'=>'trackupload', 'uses'=>'TracksController@upload'])->before('auth');

Route::resource('videos', 'VideosController');
Route::post('videoupload', ['as'=>'videoupload', 'uses'=>'VideosController@upload'])->before('auth');

#Cart Routes
Route::get('cart', ['as'=>'cart', 'uses'=>'CartsController@index']);
Route::post('add', ['as'=>'add', 'uses'=>'CartsController@add']);
Route::get('remove', ['as'=>'remove', 'uses'=>'CartsController@remove']);
Route::post('delete', ['as'=>'delete', 'uses'=>'CartsController@delete']);

#Customers 
Route::resource('customers', 'CustomersController');


Route::resource('services', 'ServicesController');
Route::resource('orders', 'OrdersController');
Route::resource('profiles', 'ProfilesController');

Route::resource('users', 'UsersController');
Route::resource('roles', 'RolesController');

# Registration
Route::get('/register', 'RegistrationController@create');
Route::post('/register', ['as'=>'registration.store', 'uses'=>'RegistrationController@store']);

# Background
Route::resource('backgrounds', 'BackgroundsController');
Route::post('backgroundupload', ['as'=>'backgroundupload', 'uses'=>'BackgroundsController@upload'])->before('auth');

Route::get('/{profile}', 'WebsitesController@show');






