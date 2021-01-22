@extends('layouts.app')

@section('content')


  <h1>POSTS</h1>
  @if (count($posts) > 0)
      @foreach ($posts as $post)
          
          <div class="card card-body bg-light">
            <div class="row">
              <div class="col-md-4">
                <img style="width:100%;" src="/storage/cover_images/{{$post->cover_image}}" />
              </div>
              <div class="col-md-8">
                <a href="/posts/{{$post->id}}"><h3>{{$post->title}}</h3></a>
                <small>written on {{$post->created_at}} by {{$post->user->name}}</small>
  
              </div>
            </div>
          </div>
      @endforeach
      <div>{{$posts->links()}}</div>
  @else
      <p>No post available</p>
  @endif

@endsection
