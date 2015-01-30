@extends('layouts.master')
@section('content')
@if($profile==true)

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
	<div class="col-md-6 well">
<h4>Video Imagen</h4>
<p>Agregar imagen(s) de fondo.</p>
<a class="btn btn-default" href="{{route('backgrounds.create')}}">Agregar Imagen de Fondo</a>

<table class="table">
      <caption>Images de fondo disponibles  {{count(Auth::user()->backgrounds()->get())}}</caption>
      <thead>
        <tr>

          <th>Fondo</th>
          <th>Descripsion</th>
          <th>Edicion</th>
        </tr>
      </thead>
      <tbody>
      	@foreach(Auth::user()->backgrounds()->get() as $image)
        <tr>
          <td><img src="{{asset('/uploads/company/'. Auth::user()->id . '/' . $image->file)}}" width="100" alt="$image->file"></td>
          <td>{{$image->description}}</td>
          <td>@mdo</td>
        </tr>
        @endforeach
      </tbody>
    </table>


		



	</div>
</div>


@else
<h2>Hola {{Auth::user()->username}}</h2> 
<strong>Bienvenido a tu monitor musical.</strong> 
<br>
Aqui puedes convertir tu musica en videos y monitorear la actividad. Solo sigue los siguientes pasos (este mensaje no sera repetido). 

<h4>1.</h4> 
Crear Perfil
<h4>2.</h4>
Crear Generos como (Banda, Rancheras ext..)
<h4>3.</h4>
Crear Categorias como (Mejores Vendidos, Top 100, Puras del Recuerdo ext..)
<h4>4.</h4>
Crear Artistas (Vicente Fernandez, Luis Enrique, Chayanne ext..)
<h4>5.</h4>
Crear Albums (Mejores Exitos, Puras Romanticas ext..)
<br>
<br>

<a class="btn btn-default" href="{{route('profiles.create')}}">Perfil</a>
@endif


@stop




