<!-- -->
<div class="row">
	<div class="col-md-3">
		<h3>{{$product->name}}</h3>
			<img src="{{asset('uploads/company/' .$user->id.'/'. $product->id . '/' . $product->img)}}" class="thumbnail img-responsive">
		  <h5>{{$product->artist()->first()['name']}}</h5>
    </div>
		<div class="col-md-9">
			<div class="well">


<table class="table table-striped">
      <thead>
        <tr>
          <th>Track</th>
          <th>Name</th>
          <th>Player</th>
          <th>Upl</th>
          <th>Service</th>
          <th>Monitor</th>

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


<!-- IF user is loogged in show the extra cells and functions -->

          <td>
            <!-- View Video Icon -->

  @include('include.form.file.create')

  @include('include.modals.video')
          </td>
          <td>
    <!--    If track has services, loop them -->
   @if(count($track->service()->first()))
           <!-- Loop services -->
        @foreach($track->service()->get() as $service)
          @include('include.modals.service_index')
        @endforeach
   @else
   No service listed
   @endif
          </td>
          <td>
            @include('include.form.services.create')
          </td>

  </tr>

@endforeach

      </tbody>
    </table>
    @if(Auth::user())
        @if(Auth::user()->roles()->first()->name == 'member')
@include('include.form.track.create')
        @endif
    @endif
</div>
		</div>
</div>

{{$product->description}}