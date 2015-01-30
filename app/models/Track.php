<?php

class Track extends \Eloquent {
	protected $fillable = [];


	public function product(){

		return $this->belongsToMany('Product');
	}


	public function service(){

		return $this->belongsToMany('Service');
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


}