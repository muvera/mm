<?php

class Bucket extends \Eloquent {
	protected $fillable = [];

	public function users(){
	return 	$this->belongsToMany('User');
	}
}