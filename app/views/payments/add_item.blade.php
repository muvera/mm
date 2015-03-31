{{Form::open(['route'=>'add'])}}
{{Form::hidden('track_id', $track->id)}}
{{Form::hidden('album',$product->name)}}
{{Form::hidden('album_id',$product->id)}}
{{Form::hidden('artist',$product->artist()->first()['name'])}}
<button type="submit" class="btn btn-primary">99¢</button>
{{Form::close()}}