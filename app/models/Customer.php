<?php

class Customer extends \Eloquent {
	protected $fillable = [];

	public function users(){
	return 	$this->belongsToMany('User');
	}

	public function orders(){
	return 	$this->belongsToMany('Order');
	}


}