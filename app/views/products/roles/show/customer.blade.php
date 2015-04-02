<!-- -->
<div class="row">
	<div class="col-md-3">
		<h3>{{$product->name}}</h3>
			<img src="{{asset('uploads/company/' .$user->id.'/'. $product->id . '/' . $product->img)}}" class="thumbnail img-responsive">
		  <h5>{{$product->artist()->first()['name']}}</h5>
      <p>{{$product->description}}</p>
    </div>
		<div class="col-md-9">
			<div class="well">


<table class="table table-striped">
      <thead>
        <tr>
          <th>Track</th>
          <th>Name</th>
          <th>Player</th>
          <th>Buy</th>
        </tr>
      </thead>
      <tbody>
@foreach($tracks as $track)
		<tr>
          <th scope="row">{{$track->track_number}}</th>
          <td>{{$track->name}}</td>
          <td>
  @if($track->file)
  @include('include.form.track.play')
  @endif
          </td>
          <td>
@include('payments.add_item')
  </td>
  </tr>

@endforeach

      </tbody>
    </table>
</div>
		</div>
</div>
