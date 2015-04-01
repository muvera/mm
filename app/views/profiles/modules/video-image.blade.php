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