<?php

class CartsController extends \BaseController {



		public function index(){
//
		$products = Session::get('products');

		return View::make('carts.index')
				->with('products', $products);

		}

		public function add(){
			$input = Input::get();
			$track = Track::findOrfail($input['track_id']);
			// Load the details on the sesion
			Session::push('products', 
				['id'=>$track->id, 
				'number'=>$track->track_number,
				'album_id'=>$input['album_id'],
				'name'=>$track->name, 
				'artist'=>$input['artist'], 
				'album'=>$input['album']
				]);
			return Redirect::back();

		}

		public function remove(){

		}

		public function delete(){

			Session::forget('products');
			$store = Session::get('username');
			return Redirect::to('/'.$store);

		}




}