@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a href="{{url('/posts/create')}}" class="btn btn-primary">Create Post</a>

                    @foreach($posts as $post)
                    <ul>
                         <li>{{$post->title}}</li>
                         <li><a href="{{url('posts/'.$post->id.'/edit')}}" >Edit</a></li>

                    </ul>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
