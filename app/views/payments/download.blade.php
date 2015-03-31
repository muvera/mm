@if($order->status == '1')
<a href="/uploads/company/{{$order->store_id}}/{{$item['album_id']}}/{{$item['id']}}/{{$track->file}}" class="btn btn-primary btn-block btn-sm">Download</a>
<br>
@else
<button class="btn btn-default btn-sm btn-block">No Download</button>
<br>
@endif