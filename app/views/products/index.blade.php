
@extends('layouts.master')
@section('content')
<!-- -->
<h2>Albums</h2>
<div class="row">
  <div class="col-md-6">
    <a class="btn btn-primary btn-lg" href="{{route('products.create')}}" class="">Nuevo Album</a>
    <a class="btn btn-default btn-lg" href="/products" class="">Todos los Albums</a>
  </div>
  <div class="col-md-6">

          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search" name="q">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
          </form>
  </div>
</div>
{{$products->links()}}



<table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Cover</th>
          <th>Upload</th>
        <th>Artist</th>
         <th>Title</th>
          <th>Description</th>
          <th>Controller</th>
        </tr>
      </thead>
      <tbody>


@foreach($products as $product)
      <tr>
          <td>{{$product->id}}</td>
          <td>{{$product->catalog}}<a href="{{route('products.show', $product->id)}}"><img src="{{asset('uploads/company/'. Auth::user()->id. '/' . $product->id . '/' . $product->img)}}" class="thumbnail" width="100"> </a></td>

          <td>
@include('include.form')
</td>
          <td>
  <?php
  $artist = Artist::where('id', '=', $product->artist_id)->first();
  ?>

 @if($artist==true)
          {{$artist->name}}
          @else
          No Record
  @endif
          </td>
          <td><a href="{{route('products.show', $product->id)}}">{{$product->name}}</a></td>
          <td>



</td>
          <td>

        <a href="{{route('products.edit', $product->id)}}" class="btn btn-default btn-sm btn-block">Edit</a>
        {{Form::open(['method'=>'DELETE', 'route'=>['products.destroy', $product->id]])}}
        {{Form::hidden('id', $product->id)}}
        <button type="submit" class="btn btn-default btn-sm btn-block">Delete</button>
        {{Form::close()}}

          </td>
        </tr>

@endforeach

 </tbody>
    </table>



{{$products->links()}}


@stop
