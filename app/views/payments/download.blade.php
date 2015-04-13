@if($order->status == '1')
{{Form::open(['route'=>'download'])}}
{{Form::hidden('store_id', $order->store_id)}}
{{Form::hidden('album_id', $item['album_id'])}}
{{Form::hidden('track_id', $item['id'])}}
<button type="submit" class="btn btn-primary btn-sm btn-block">Download</button>
{{Form::close()}}
<br>
@else
<button class="btn btn-default btn-sm btn-block">No Download</button>
<br>
@endif