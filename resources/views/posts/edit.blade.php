@extends('layouts.app')
@section('content')
  <h1>Create Posts Now !</h1>
  {!! Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST']) !!}
  @method('PUT')
    <div class="form-group">
      {{Form::label('title','Title')}}
      {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Your Title Here Please'])}}
    </div>
    <div class="form-group">
      {{Form::label('content','Content')}}
      {{Form::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'Your Content Here Please'])}}
    </div>
    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    
  {!! Form::close() !!}

@endsection