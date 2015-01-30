<?php

class Background extends \Eloquent {
	protected $fillable = [];

	public function users(){
	return 	$this->belongsToMany('User');
	}

	public function products(){

	return $this->belongsToMany('Product');
   }
}