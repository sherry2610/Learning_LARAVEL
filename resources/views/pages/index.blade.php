@extends('layouts.app')

@section('content')
{{-- <h1>{{$title}}</h1>
<p>This is home page</p> --}}

<div class="jumbotron text-center">
  <h1>Welcome to Laravel!</h1>
  <p>This is laravel app from scratch</p>
  <p><a class="btn btn-primary btn-lg" href="='/login" role="button" >Login</a><a class="btn btn-success btn-lg" href="='/login" role="button" >Register</a></p>
</div>

@endsection
