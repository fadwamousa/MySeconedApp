@extends('layouts.app')
@section('content')
  <h1>Posts Section</h1>
    
    <a  href="{{url('/posts')}}" class="btn btn-primary">GO Back</a>
    <div class="card" style="padding: 4px">
  
    	  <h4>{{$post->title}}</h4>
	      <p>{{$post->content}}</p>
	      <hr>
	      <p><small>{{$post->created_at->diffForHumans()}}</small> By
	      <small> {{$post->user->name}}</small>
	      </p>
          <hr>
          <img style="width: 250px;height: 250px" src="{{url('storage/cover_images/'.$post->cover_image)}}">
          @if(!auth()->guest())
            @if(auth()->user()->id == $post->id)
              <a href="{{url('/posts/'.$post->id.'/edit')}}">Edit</a>
              {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST'])!!}
              {{Form::hidden('_method','DELETE')}}
              {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
              {!!Form::close()!!}
            @endif
          @endif
    	
    </div>
      
    
@endsection