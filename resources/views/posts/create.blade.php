@extends('layouts.app')
@section('content')
  <h1>Create Posts Now !</h1>
  {!! Form::open(['action'=>'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
      {{Form::label('title','Title')}}
      {{Form::text('title','',['class'=>'form-control','placeholder'=>'Your Title Here Please'])}}
    </div>
    <div class="form-group">
      {{Form::label('content','Content')}}
      {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Your Content Here Please'])}}
    </div>
    <div class="form-group">
      {{Form::file('cover_image')}}
      
    </div>
    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    
  {!! Form::close() !!}

@endsection