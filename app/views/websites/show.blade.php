@extends('layouts.master')
@section('content')
Welcome {{$user->username}}
@foreach($user->categories()->get() as $category)

<a href="{{route('categories.show', $category->id)}}" class="">{{$category->name}}</a>
<br> 

@endforeach
@stop