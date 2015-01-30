<?php namespace core\Forms;

use Laracasts\Validation\FormValidator;

class ProfileForm extends FormValidator {

		protected $rules = [
			'address1' => 'required', 
			'address2' => 'required',
			'city' => 'required',
			'zip' => 'required', 
			'state' => 'required'

		];

	}