@extends('layouts.master')
@section('content')

<h1>Show All Users</h1>


<div class="bs-example" data-example-id="striped-table">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Username</th>
          <th>Role</th>
          <th>Email</th>
          <th>Controls</th>
        </tr>
      </thead>
      <tbody>
   @foreach($users as $user)
   
           <tr>
          <th scope="row">1</th>
          <td><a href="{{route('users.show', $user->id)}}">{{$user->username}}</a> </td>
          <td> {{$user->roles()->first()['name']}}</td>
          <td><a href="">{{$user->email}}</a> </td>
          <td>


<!-- Controllers  -->         	
	<a href="{{route('users.edit', $user->id)}}">Edit</a>
	{{Form::open(['method'=>'DELETE', 'route'=>['users.destroy', $user->id]])}}
	{{Form::hidden('id', $user->id)}}
	{{Form::submit('delete')}}
	{{Form::close()}}



          </td>
        </tr>


@endforeach   	

      </tbody>
    </table>
  </div>









<a href="{{route('users.create')}}" class="">New</a>

@stop