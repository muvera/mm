@extends('layouts.master')
@section('content')

<div class="row">
	<div class="col-md-6">
<h2>Hola {{Auth::user()->username}} <small>{{Auth::user()->email}}</small></h2>
		<h3>Perfil</h3>

Business Name: {{$profile->business}}<br>
Contact: {{$profile->contact}}<br>
Domicilio: {{$profile->address}}<br>
Suite: {{$profile->address2}}<br>
City: {{$profile->city}}<br>
State: {{$profile->state}}<br>
Country: {{$profile->country}}<br>
<br>

	{{Form::open(['method'=>'DELETE', 'route'=>['profiles.destroy',$profile->id]])}}
	{{Form::hidden('id',$profile->id)}}
<a class="btn btn-default" href="{{route('profiles.edit',$profile->id)}}">Edit</a>
<button class="btn btn-default" type="submit">Delete</button>
	{{Form::close()}}
	</div>
	<div class="col-md-6">
    @if(Auth::user()->roles()->first()->name == 'member')
      @include('profiles.modules.video-image.blade.php')
    @endif
	</div>
</div>



@stop




