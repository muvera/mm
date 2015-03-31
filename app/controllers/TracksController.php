<?php

class TracksController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /tracks
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /tracks/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /tracks
	 *
	 * @return Response
	 */
	public function store()
	{
		// Save Data
		$input = Input::get();
		$track = new Track;
		$track->track_number = $input['track_number'];
		$track->name = $input['name'];
		$track->save();

		// Get Product Id
		$product_id = $input['product_id'];
		// Get Artist Id
		$artist_id = $input['artist_id'];


		// Attach the track to Product
		$process = Product::find($product_id);
		$process->track()->attach($track->id);

		// Attach the track to Artist
		$process = Artist::find($artist_id);
		$process->track()->attach($track->id);


		return Redirect::back();
	}

	/**
	 * Display the specified resource.
	 * GET /tracks/{id}
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
	 * GET /tracks/{id}/edit
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
	 * PUT /tracks/{id}
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
	 * DELETE /tracks/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//$input = Input::get('track_id');
		$track = Track::find($id);
		$track->delete();

		return Redirect::back();

	}


			public function upload()
	{

		
		$user = Auth::user();
		// Inputs from form
		$track_id = 	Input::get('track_id');
		$image = 		Input::file('file');
		$product_id = 	Input::get('product_id');
		$track_name = 	Input::get('track_name');

		// If track folder does not exists make track folder
		$folder = public_path('uploads/company/'.$user->id.'/'.$product_id.'/'.$track_id);
		if(!file_exists($folder))
		{
			mkdir($folder);
		}

		// remove spaces
		$final = preg_replace('#[ -]+#', '-', $track_name);
		$new_name = $final.'.mp3';
		$upload = $image->getClientOriginalName();
		


		// move the track the the folder
		$image->move($folder.'/', $new_name);


		// Save track name to the database
		$track = Track::findOrFail($track_id);
		$track->name = $track_name;
		$track->file = $new_name;
		$track->save();

		// inputs
		$track_name = Input::get('track_name');
		$artist_name = Input::get('artist_name');
		$album_cover = Input::get('album_cover');

		// Make the path for the scripts
		$path = $folder.'/';
		
		// Path for company background and album cover
		$path_basic_images = public_path('uploads/company/'.$user->id.'/' . $product_id . '/');

		//dd($path_basic_images);
		Audio::make($path, $track->file, $track->file);
		// Process the Video Images

		VideoImages::TrackName($track_name, $path);
		VideoImages::ArtistName($artist_name, $path);
		VideoImages::AlbumCover($path_basic_images, $album_cover, $path);
		VideoImages::FlattenLayers($path, $album_cover, $track_name, $artist_name, $product_id, $user->id, $path);
		
		// Slide_show Name
		$slide_show = 'slide_show_'.$final.'_.mp4';
		$sound_file = 'preview-'.$new_name;
		$video_name = $final;

		//MakeVideo::SlideShow($path_basic_images, $slide_show);
		//MakeVideo::MergeSound($path, $slide_show, $sound_file, $video_name);
		//slide show
		shell_exec('avconv -framerate 1/10 -i '.$path. 'img%03d.png '.$path.$slide_show);
		
		//shell_exec('avconv -i uploads/out.mp4 -i uploads/chalino.mp3 -c:a copy uploads/finish.mp4');
		shell_exec('avconv -i '.$path.$slide_show.' -i '.$path.$sound_file.' -c:a copy '.$path.$video_name.'.mp4');




		return Redirect::back();
	}



}