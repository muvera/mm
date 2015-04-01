
<!-- MEMBERS ONLY -->
@if(Auth::user()->roles()->first()->name == 'member')
	@include('profiles.roles.create.member')
@endif

<!-- CUSTOMERS ONLY -->
@if(Auth::user()->roles()->first()->name == 'customer')
	@include('profiles.roles.create.customer')
@endif