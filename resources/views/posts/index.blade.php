@extends('layouts.app')
@section('content')
  <h1>Posts Section</h1>
  @if(count($posts) >0)
    @foreach($posts as $post)
    <div class="card" style="padding: 4px">

    	  <h4><a href="{{url('/posts/'.$post->id)}}">{{$post->title}}</a></h4>
	      <p>{{$post->body}}</p>
	      <hr>
        <img style="width: 250px;height: 250px" src="{{url('storage/cover_images/'.$post->cover_image)}}">
	      <p><small>{{$post->created_at->diffForHumans()}}</small>By
	      <small>{{$post->user->name}}</small>
	      </p>
    	
    </div>
      
    @endforeach
    {{$posts->render()}}
    @else
    <p>No posts Found</p>
  @endif

@endsection