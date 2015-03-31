<?php
class VideoImages {

// Most arguments come from the TracksController



static public function CopyLogo($path){

		$pwd = public_path('uploads/');
		// create Image from file
		$img = Image::make($pwd. '/' . 'logo.png');
		$img->save($path . 'img001.png');

}


static public function TrackName($track_name, $path)
		{
		
		// CONSTRUCT TRACK NAME

		// Count Characters uppercase
		$track = strtoupper($track_name); // String
		$length = strlen($track); // 15 letters

		// Create image background for title
		$track_h = 94;
		$track_w = 76;
		$pwd = public_path('uploads/');
		$img = Image::canvas($track_w * $length, $track_h);
		$img->text($track, 0, 0, function($font) {
		  $pwd = public_path('uploads/');
		    $font->file($pwd.'/arial.ttf');
		    $font->size(120);
		    $font->color('#000000');
		    //$font->align('center');
		    $font->valign('top');
		    $font->angle(0);
		});
		$final = preg_replace('#[ -]+#', '-', $track_name);
		$img->save($path . '/'  .$final . '.png');
		}



	static public function ArtistName($artist_name, $path){
		// CONSTRUCT ARTIST NAME

		// Count Characters uppercase
		$name = strtoupper($artist_name); // String
		$length = strlen($name); // 15 letters

		// Create image background for title
		$name_h = 94;
		$name_w = 76;
		$pwd = public_path('uploads/');
		$img = Image::canvas($name_w * $length, $name_h);	
		$img->text($name, 0, 0, function($font) {
		  $pwd = public_path('uploads/');
		    $font->file($pwd.'/arial.ttf');
		    $font->size(120);
		    $font->color('#000000');
		    //$font->align('center');
		    $font->valign('top');
		    $font->angle(0);
		});

		// Clear Spaces and Add Dashes
		$final = preg_replace('#[ -]+#', '-', $name);

		$img->save($path . '/' . $final . '.png');
	}


	static public function AlbumCover($path, $album_cover, $new_path){
		// GET ALBUM COVER and RESIZE to 900
		$pwd = $path;
		$cover = $album_cover;

		$img = Image::make($pwd . $cover);
		$img->resize(900, null, function ($constraint) {
		    $constraint->aspectRatio();
		});
		$img->save($new_path . 'r'.$cover);
	}

	static public function FlattenLayers($path, $album_cover, $track_name, $artist_name, $product_id, $user_id){

		// INSERT IN TO BACKGROUND
		// INSERT BOTTOM TITTLE
		$track_name = preg_replace('#[ -]+#', '-', $track_name);
		$artist_name = preg_replace('#[ -]+#', '-', $artist_name);
		$pwd = public_path('uploads/company/'.$user_id.'/'. $product_id);
		

		// copy this image to the track folder
		$img = Image::make($pwd. '/' . 'img001.png');
		$img->save($path . '/img001.png');
		// Flaten the images
		$img = Image::make($pwd. '/' . 'img001.png');
		$img->insert($path . '/'. $track_name . '.png', 'top-center', 10, 100);
		$img->insert($path . '/r'. $album_cover, 'center');
		$img->insert($path . '/'. $artist_name . '.png', 'bottom-center', 10, 100);
		$img->save($path . '/img002.png');


		
	}





}