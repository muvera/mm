
<!DOCTYPE html>
<!-- Microdata markup added by Google Structured Data Markup Helper. -->
<html lang="en">
  <head>
    <title>
@yield('title')
</title>
<meta name="description" content="@yield('meta_description')">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap core CSS -->
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

@yield('meta')

<link href="//vjs.zencdn.net/4.11/video-js.css" rel="stylesheet">
<script src="//vjs.zencdn.net/4.11/video.js"></script>

  </head>

<body>


   
<div class="container">
	@if(Auth::user())
      @if(Auth::user()->roles()->first()->name == 'member')
	     @include('layouts.nav')
      @endif
	@endif

@yield('content')
</div>


<!-- JavaScript And BootStrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
@yield('footer')
  </body>
</html>
