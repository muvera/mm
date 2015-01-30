<?php

class Service extends \Eloquent {
	protected $fillable = [];


		public function track(){

		return $this->belongsToMany('Track');
	}

	public function video(){

	return $this->belongsToMany('Video');
}
}