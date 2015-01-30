@extends('layouts.master')
@section('content')
<h1>{{$artist->name}}</h1>
<p>{{$artist->alias}}</p>
<div class="row">
@foreach($products as $product)

  <div class="col-md-3">
    <a href="{{route('products.show', $product->id)}}" class="thumbnail">{{$product->name}}
      <img src="{{asset('uploads/albums/' . $product->id . '/' . $product->img)}}" class="thumbnail">
    </a>
  </div>
@endforeach
</div>
@stop