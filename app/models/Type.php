<?php

class Type extends \Eloquent {
	protected $fillable = [];

	public function video(){

	return $this->belongsToMany('Video');
	}
}