@extends('layouts.master')
@section('content')

<h1>{{$user->username}}</h1>
<p>{{$user->email}}</p>

@stop