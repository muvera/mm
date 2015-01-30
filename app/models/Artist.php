<?php

class Artist extends \Eloquent {

		// Search Name
		public function scopeSearchName($query, $search)
	{

		return $query->where('name', 'LIKE', "%$search%");
	}


		// Search Alias
		public function scopeSearchAlias($query, $search)
	{

		return $query->where('alias', 'LIKE', "%$search%");
	}

	public function track(){

	return $this->belongsToMany('Track');
   }

   	public function product(){

	return $this->belongsToMany('Product');
   }

	public function users(){
	return 	$this->belongsToMany('User');
	}


}