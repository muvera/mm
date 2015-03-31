@extends('layouts.master')
@section('content')
<h1>{{$category->name}}</h1>
<p>{{$category->description}}</p>



<div class="row">
@foreach($products as $product)
<div class="col-md-3">
      <div class="well">
        <center>
          <a href="{{route('products.show', $product->id)}}">
         <img src="/uploads/company/{{$user->id}}/{{$product->id}}/{{$product->img}}" class="thumbnail img-responsive" width="200">
        </a>
        </center>
        {{$product->catalog}}
        {{$product->name}}
        {{$product->alias}}
        {{$product->barcode}}
      </div>
      </div>
@endforeach
</div>

@if(Auth::user())
      @if(Auth::user()->roles()->first()->name == 'member')
        <a href="{{route('products.create')}}" type="button" class="btn btn-primary">New Album</a>
      @endif
@endif
@stop



 