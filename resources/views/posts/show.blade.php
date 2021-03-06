@extends('layouts.app')

@section('content')

<br><br>
  <a href="/posts" class="btn btn-default">Go Back</a>
  <h1>{{$post->title}}</h1>
  <small>Written on {{$post->created_at}}</small>
  <hr>
  <img style="width:100%;" src="/storage/cover_images/{{$post->cover_image}}" />
  <br><br>
  <div>
    {{$post->body}}
  </div>
  <hr>
  @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
  <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

  {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy',$post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
  {{ Form::hidden('_method', 'DELETE') }}
  {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
  {!! Form::close() !!}
  @endif
  @endif

@endsection
