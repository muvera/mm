<?php

class ProductsController extends \BaseController {

	// FILTER
	 public function __construct() {
        $this->beforeFilter('auth', array('except' => array('index', 'show')));
        }

	/**
	 * Display a listing of the resource.
	 * GET /products
	 *
	 * @return Response
	 */
	public function index()
	{

		// Get logged user
		$user = Auth::user();
		// Get categories from loged user
			$products = $user->products()->paginate(20);
				return View::make('products.index')
						->with('products',$products);

	}

	/**
	 * Show the form for creating a new resource.
	 * GET /products/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$artists = Artist::get();
		$genres = Genre::get();
		$categories = Category::get();

		return View::make('products.create')
				->with('artists', $artists)
				->with('genres', $genres)
				->with('categories', $categories);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /products
	 *
	 * @return Response
	 */
	public function store()
	{


		// Current Logged User
			$user = Auth::user();

			$input = Input::get();
			$background = Input::get('background_id');
			
			if(!['name']) dd('You need a name');

		// Create new Record
			$product = new Product;
			$product->name = $input['name'];
			$product->description = $input['description'];
			$product->artist_id = $input['artist_id'];
			$product->genre_id = $input['genre_id'];
			$product->cat_id = $input['cat_id'];
			$product->catalog = $input['catalog'];
			$product->barcode = $input['barcode'];
			$product->save();

		// Attach to Current User
			$user->products()->attach($product->id);

		// Attach the product to Artist
			$process = Artist::find($input['artist_id']);
			$process->product()->attach($product->id);

		// Attach a background to the product
			$background = Background::find($background);
			$background->products()->attach($product->id);

		// Make the product Folder
			$product_folder = public_path('uploads/company/'.$user->id.'/'. $product->id);
			if(!file_exists($product_folder))
			{
			mkdir($product_folder);	
			}
			

		// Move image from user company to product folder
			$user_id = public_path('uploads/company/'. $user->id);
			$path = public_path('uploads/company/'.$user->id.'/' . $product->id . '/');
			$img = Image::make($user_id. '/' . $background->file);
			$img->save($path . 'img001.png');
		// Copy the logo to the album folder
		
				return Redirect::to('/products' );
	}

	/**
	 * Display the specified resource.
	 * GET /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$product = Product::findOrFail($id);
		Session::put('album_id', $id);

		$tracks = $product->track()->get();
		$services = Service::get();
		// Video Types
		$types = Type::get();
		
	
				return View::make('products.show')
					->with('product', $product)
					->with('tracks', $tracks)
					->with('services', $services)
					->with('types', $types);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /products/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$product = Product::findOrFail($id);
		$artists = Artist::get();
		$genres = Genre::get();
		$categories = Category::get();
		
				return View::make('products.edit')
						->with('product', $product)
						->with('artists', $artists)
						->with('genres', $genres)
						->with('categories', $categories);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::get();
		$product = Product::findOrFail($id);
			$product->name = $input['name'];
			$product->description = $input['description'];
			$product->artist_id = $input['artist_id'];
			$product->genre_id = $input['genre_id'];
			$product->cat_id = $input['cat_id'];
			$product->catalog = $input['catalog'];
			$product->barcode = $input['barcode'];
			$product->save();

			return Redirect::to('/products' );

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
			$product = Product::findOrFail($id);
				$product->delete();
				return Redirect::to('/products');
	}

		public function upload()
	{

		$user = Auth::user();

		$album_id = Input::get('album_id');
		$image = Input::file('image');
		$folder = public_path('/uploads/company/'.$user->id .'/'. $album_id);
		
		if(!file_exists($folder)){
			mkdir($folder);
		}
		$new_name = rand(700,0).'.jpg';
		$upload = $image->getClientOriginalName();

		$image->move(public_path('/uploads/company/' . $user->id. '/'. $album_id .'/'), $new_name);

		$album = Product::findOrFail($album_id);
		$album->img = $new_name;
		$album->save();

		return Redirect::back();
	}


}




