<div class="well">
	<div class="row">
{{Form::open(['route'=>'services.store'])}}

{{Form::hidden('track_id', $track->id)}}


		<!-- service -->
<div class="form-group">
{{ Form::label('service_id', 'Select Service') }}
<select name="service_id">
	@foreach($services as $service)
  <option value="{{$service->id}}">Service: {{$service->name}}</option>
  	@endforeach
</select>
</div>



</div>

</div>
