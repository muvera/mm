<?php
class Audio{
	
public static function make($path, $in, $out){

exec('cd files; yes | ffmpeg -i '.$path.$in.' -ss 60 -t 70 '.$path.'cropped.mp3 &');
exec('cd files; yes | ffmpeg -i '.$path.'cropped.mp3 -af "afade=t=in:ss=0:d=4" '.$path.'fadein.mp3 &');
exec('cd files; yes | ffmpeg -i '.$path.'fadein.mp3 -af "afade=t=out:st=65:d=5" '.$path.'preview-'.$out.' &');
}

}