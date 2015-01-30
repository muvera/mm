<?php
class MakeVideo{
	
public static function SlideShow($path, $slide_show){
	

//shell_exec('avconv -framerate 1/10 -i uploads/img%03d.png  uploads/out.mp4');
shell_exec('avconv -framerate 1/10 -i '.$path . 'img%03d.png '. $path.$slide_show);

}

public static function MergeSound($path, $slide_show, $sound_file, $video_name){

//shell_exec('avconv -i uploads/out.mp4 -i uploads/chalino.mp3 -c:a copy uploads/finish.mp4');
shell_exec('avconv -i '.$path.$slide_show.' -i '.$path.$sound_file.' -c:a copy '.$path.$video_name.'.mp4');

}


}