@extends('layouts.master')
@section('content')

<h1>Show All Roles</h1>

<ul>
@foreach($roles as $role)

<li><a href="{{route('roles.show', $role->id)}}">{{$role->name}}</a> 
	| <a href="{{route('roles.edit',$role->id)}}">Edit</a> </li>
	{{Form::open(['method'=>'DELETE', 'route'=>['roles.destroy', $role->id]])}}
	{{Form::hidden('id', $role->id)}}
	{{Form::submit('delete')}}
	{{Form::close()}}

@endforeach
</ul>

<a href="{{route('roles.create')}}" class="">New</a>

@stop