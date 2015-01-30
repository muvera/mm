<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';


	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	protected $fillable = ['username','email', 'password'];



	// LOGGED USER RELATIONSHIPS Start

		public function categories(){
	return 	$this->belongsToMany('Category')->withTimestamps();
	}

		public function artists(){
	return 	$this->belongsToMany('Artist')->withTimestamps();
	}

		public function products(){
	return 	$this->belongsToMany('Product')->withTimestamps();
	}

		public function genres(){
	return 	$this->belongsToMany('Genre')->withTimestamps();
	}

		public function profiles(){
	return 	$this->belongsToMany('Profile')->withTimestamps();
	}

		public function backgrounds(){
	return 	$this->belongsToMany('Background')->withTimestamps();
	}

	// LOGGED USER RELATIONSHIPS ENDS

	public function roles(){
	return 	$this->belongsToMany('Role')->withTimestamps();
	}

	public function hasRole($name){
		foreach ($this->roles as $role)
		{
			if ($role->name == $name) return true;
		}
		return false;
	}

	public function assignRole($role){

		return $this->roles()->attach($role);
	}

		public function removeRole($role){

		return $this->roles()->detach($role);
	}


	public function setPasswordAttribute($password){
	$this->attributes['password'] = Hash::make($password);

	}

}
