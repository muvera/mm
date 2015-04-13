@extends('layouts.master')
@section('content')
<h3>Estas en {{$user->profiles()->first()->business}} <small>tienda musical</small></h3>
<div class="row">
@foreach($user->products()->get() as $product)
<div class="col-md-3">
      <div class="well">
        <center>
          <a href="{{route('products.show', $product->id)}}">
         <img src="/uploads/company/{{$user->id}}/{{$product->id}}/{{$product->img}}" class="thumbnail img-responsive" width="200">
        </a>
        </center>
        {{$product->name}}
        {{$product->alias}}
                {{$product->catalog}}
      </div>
      </div>
@endforeach
</div>
@stop