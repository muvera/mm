<?php

use core\Forms\RegistrationForm;
use core\Forms\CustomerForm;


class RegistrationController extends \BaseController {

	/**
	 *
	 * @var RegistrationForm
	 */
	private $registrationForm;

	function __construct(RegistrationForm $registrationForm,  CustomerForm $customerForm)
{
    $this->registrationForm = $registrationForm;
    $this->customerForm = $customerForm;
}



	/**
	 * Display a listing of the resource.
	 * GET /registration
	 *
	 * @return Response
	 */
	public function index()
	{
		dd('ok');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /registration/create
	 *
	 * @return Response
	 */
	public function create()
	{
	// If you are registered and signed in, redirect your ass home. 
		if(Auth::check()) return Redirect::home();

		return View::make('registration.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /registration
	 *
	 * @return Response
	 */
	public function store()
	{

	
		// // Get form data
		// $input = Input::only('username', 'email', 'password', 'password_confirmation');
		// // Validate the data
		// $this->registrationForm->validate($input);
		// // create the user
		// $user = User::create($input);
		// // assing member role
		// $user->assignRole(1);
		// // log in the user
		// Auth::login($user);

		$input = Input::get('role');

		// Make Seller Record
		if($input == 'seller'){
		// Get form data
		$input = Input::only('username', 'email', 'password', 'password_confirmation');
		// Validate the data
		$this->registrationForm->validate($input);
		// create the user
		$user = User::create($input);
		// assing member role
		$user->assignRole(2);
		// log in the user
		Auth::login($user);
		}

		// Make Customer Record
		if($input == 'customer'){
		// Get form data
		$input = Input::only('email', 'password', 'password_confirmation');
		// Validate the data
		$this->customerForm->validate($input);
		// create the user
		$user = User::create($input);
		// assing Customer role
		$user->assignRole(3);
		// log in the user
		Auth::login($user);


		//	Attach  new user to store

		// Get the store id
		$store = User::where('username', '=', Session::get('username'))->first();
		$store_id = $store->id;

		// create store customer
		$email = Input::get('email');
		$user_customer = new Customer;
		$user_customer->store_id = $store_id;
		$user_customer->customer_id = $user->id;
		$user_customer->save();

		// Attach customer
		$username = Input::get('username');
		// If customer has no store reference, Claim Customer with the first store
		if(!$username)
		{
		$user = User::findOrFail(1);
		$user->customers()->attach($user_customer->id);
		}else{
		// If customer has a store reference than attach it
		$user = User::where('username', '=', $username)->first();
		$user->customers()->attach($user_customer->id);
		}

		}



			
			# USE MANDRILL to send registration notice
			// Mail::send('emails.welcome', [], function($message)
	
			// {
			// $email = Auth::user()->email;
			// $message->to($email)->subject('Welcome to Cake Hollywood');
	
			// });

		return Redirect::back();
	}

	/**
	 * Display the specified resource.
	 * GET /registration/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /registration/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		dd('ok');
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /registration/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /registration/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	

}