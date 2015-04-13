
<!-- Button trigger modal -->
<button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#serverload{{$track->id}}">
  <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span>
</button>





<!-- Modal -->
<div class="modal fade" id="serverload{{$track->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Get Extrenal File: mp3</h4>
      </div>
      <div class="modal-body">


  {{Form::open(['route'=>'serverload'])}} 
  {{Form::hidden('product_id', $product->id)}} 
  {{Form::hidden('track_id', $track->id)}}
  {{Form::hidden('artist_name', $product->artist()->first()['name'])}}
  {{Form::hidden('album_cover', $product->img)}}

Artist: {{$product->artist()->first()['name']}}

     <!-- track -->
 <div class="form-group">
     {{ Form::label('track_name', 'Track Name:') }}
     {{ Form::text('track_name', $track->name, ['class'=>'form-control']) }}
 </div>

    <!-- url -->
<div class="form-group">
    {{ Form::label('url', 'Sumit URL:') }}
    {{ Form::text('url', null, ['class'=>'form-control']) }}
</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Get</button>
      </div>
    </div>
  </div>
</div>
{{Form::close()}}