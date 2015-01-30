
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#v{{$track->id}}">
Edit
</button>


<!-- Modal -->
<div class="modal fade" id="v{{$track->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Enbed Video Code</h4>
      </div>
      <div class="modal-body">



{{Form::model($video,['method'=>'PATCH', 'route'=>['videos.update', $video->id]])}}
{{Form::hidden('product_id', $product->id)}} 
 {{Form::hidden('track_id', $track->id)}}   

      <!-- embed -->
  <div class="form-group">
      {{ Form::label('audio', 'Audio:') }}
      {{ Form::text('audio', null, ['class'=>'form-control']) }}
  </div>

      <!-- video -->
  <div class="form-group">
      {{ Form::label('video', 'Video:') }}
      {{ Form::text('video', null, ['class'=>'form-control']) }}
  </div>

    <!-- lyrics -->
<div class="form-group">
    {{ Form::label('lyrics', 'lyrics:') }}
    {{ Form::text('lyrics', null, ['class'=>'form-control']) }}
</div>

    <!-- karaoke -->
<div class="form-group">
    {{ Form::label('karaoke', 'Karaoke:') }}
    {{ Form::text('karaoke', null, ['class'=>'form-control']) }}
</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>
{{Form::close()}}

