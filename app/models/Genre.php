<?php

class Genre extends \Eloquent {
	protected $fillable = ['name', 'description'];


	public function users(){
	return 	$this->belongsToMany('User');
	}
}