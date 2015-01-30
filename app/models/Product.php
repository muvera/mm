<?php

class Product extends \Eloquent {
	protected $fillable = ['cat_id', 'artist_id', 'genre_id', 'img', 'name', 'description', 'catalog', 'barcode'];


public function track(){

	return $this->belongsToMany('Track');
}

public function video(){

	return $this->belongsToMany('Video');
}

	public function artist(){

	return $this->belongsToMany('Artist');
   }

 	public function users(){
	return 	$this->belongsToMany('User');
	}

	public function backgrounds(){

	return $this->belongsToMany('Background');
   }

}