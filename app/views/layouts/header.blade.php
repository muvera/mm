   <?php
   $username = Session::get('username');
   $store = User::where('username', '=', $username)->first();
   ?>
   
	@if(Auth::user())
      @if(Auth::user()->roles()->first()->name == 'member')
	     @include('layouts.nav')
      @endif

      @if(Auth::user()->roles()->first()->name == 'customer')
      <a href="{{$store->profiles()->first()->url}}">
      <img class="img-responsive" src="{{$store->profiles()->first()->header}}" alt="{{$store->profiles()->first()->business}}logo">
      </a>
      @endif
	 @else
<a href="{{$store->profiles()->first()->url}}">
   <img class="img-responsive" src="{{$store->profiles()->first()->header}}" alt="{{$store->profiles()->first()->business}}logo">
 </a>
 @endif