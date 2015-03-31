<?php namespace core\Forms;

use Laracasts\Validation\FormValidator;

class CustomerForm extends FormValidator{

	protected $rules = [

		//'username' => 'required|unique:users',
		'email'		=> 'required|email|unique:users',
		'password'	=>	'required|confirmed'


	];

}