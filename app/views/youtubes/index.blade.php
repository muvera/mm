
<h1>Show All Categories</h1>

<ul>
@foreach($youtubes as $youtube)

<li><a href="{{route('youtubes.show', $youtube->id)}}">{{$youtube->name}}</a> 
	| <a href="{{route('categories.edit', $youtube->id)}}">Edit</a> </li>
	{{Form::open(['method'=>'DELETE', 'route'=>['youtubes.destroy', $youtube->id]])}}
	{{Form::hidden('id', $youtube->id)}}
	{{Form::submit('delete')}}
	{{Form::close()}}

@endforeach
</ul>

<a href="{{route('youtubes.create')}}" class="">New</a>

