<?php

class Video extends \Eloquent {
	protected $fillable = [];


	public function product(){

		return $this->belongsToMany('Product');
	}

		public function track(){

		return $this->belongsToMany('Track');
	}

		public function service(){

		return $this->belongsToMany('Service');
	}

		public function type(){

		return $this->belongsToMany('Type');
	}

	public function users(){
	return 	$this->belongsToMany('User');
	}
}