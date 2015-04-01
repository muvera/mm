
    <?php 
    $profile = Auth::user()->profiles()->first(); 
    ?>
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
<h2>Hola {{Auth::user()->email}}</h2> 
<a class="btn btn-warning btn-block" href="{{route('profiles.create')}}">Crear Perfil Ahora</a>
@endif
