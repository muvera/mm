<div class="btn-group" role="group" >
<!-- Button trigger modal -->
<!-- Using Image of Service as a Button -->
<a data-toggle="modal" data-target="#{{$track->id}}_{{$service->id}}">
  <img src="{{$service->image}}" alt="{{$service->name}}"  width="30">
</a>
</div>

<!-- Modal -->
<div class="modal fade" id="{{$track->id}}_{{$service->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add {{$service->name}} Videos</h4>
      </div>
      <div class="modal-body">
  <!-- If there are videos  -->
@if(count($track->video()->first()))
    <!-- Get all videos from track -->
  @foreach($track->video()->get() as $video)
        <!-- if the service id matches with the video service id show -->
          @if($video->service()->first()['id'] == $service->id)
        
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#video_service_{{$video->type()->first()['id']}}" aria-expanded="false" aria-controls="collapseExample">
 {{$video->type()->first()['name']}}
</button>
<div class="collapse" id="video_service_{{$video->type()->first()['id']}}">
  <hr>
   <center> {{$video->code}}</center>

</div>


          
          
          @endif
   
  @endforeach
@endif

<hr>
<div class="well">
{{Form::open(['route'=>'videos.store'])}}
{{Form::hidden('product_id', $product->id)}}
{{Form::hidden('track_id', $track->id)}}
{{Form::hidden('service_id', $service->id)}}

<h4>New Video Details</h4>
Album: {{$product->name}} <br>
Track: {{$track->name}} <br>
Service: {{$service->name}} 



    <!-- Video type -->
<div class="form-group">
{{ Form::label('type_id', 'Video Type:') }}
<select name="type_id">
  @foreach($types as $type)
  <option value="{{$type->id}}">Type: {{$type->name}}</option>
    @endforeach
</select>
</div>


    <!-- name -->
      <div class="form-group">
         {{ Form::label('name', 'URL:') }}
         {{ Form::text('name', null, ['class'=>'form-control']) }}
      </div>


            <!-- Embed Code -->
        <div class="form-group">
            {{ Form::label('code', 'Embed Code:') }}
            {{ Form::text('code', null, ['class'=>'form-control']) }}
        </div>
        
      </div>

</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Monitor Video</button>
      </div>
    </div>
  </div>
</div>
{{Form::close()}}