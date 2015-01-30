<?php namespace core\Forms;

use Laracasts\Validation\FormValidator;

class CreateAddressForm extends FormValidator {

		protected $rules = [
			'address' => 'required', 
			'apt' => 'required',
			'city' => 'required',
			'zip' => 'required', 
			'state' => 'required',
			'country' => 'required'

		];

	}