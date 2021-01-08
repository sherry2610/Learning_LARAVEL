@extends('layouts.app')

@section('content')


  <h1>POSTS</h1>
  @if (count($posts) > 0)
      @foreach ($posts as $post)
          
          <div class="card card-body bg-light">
            <a href="/posts/{{$post->id}}"><h3>{{$post->title}}</h3></a>
              <small>written on {{$post->created_at}}</small>
          </div>
      @endforeach
      <div>{{$posts->links()}}</div>
  @else
      <p>No post available</p>
  @endif

@endsection
