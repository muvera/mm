
<!-- Button trigger modal -->
<button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#video_{{$track->id}}">
  <span class="glyphicon glyphicon glyphicon-film" aria-hidden="true"></span>
</button>


<!-- Modal -->
<div class="modal fade" id="video_{{$track->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{$track->name}} <small> {{$product->artist()->first()['name']}}</small></h4>
      </div>
      <div class="modal-body">


      <?php
    $final = preg_replace('#[ -]+#', '-', $track->name);
    ?>

<video id="example_video_1" class="video-js vjs-default-skin"
  controls preload="auto" width="540" height="264"
  poster="{{asset('/uploads/company/'.Auth::user()->id.'/'. $product->id . '/' . $track->id)}}/img002.png"
  data-setup='{"example_option":true}'>
 <source src="{{asset('/uploads/company/'.Auth::user()->id.'/'. $product->id)}}/{{$track->id}}/{{$final}}.mp4" type='video/mp4' />
 <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
</video>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
{{Form::close()}}