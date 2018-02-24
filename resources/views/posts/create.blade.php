@extends('main')
  @section('title', '| Create New Post ')
    @section('content')
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1>Create Blog Post</h1>
          <hr></hr>
          <form class="form" action="{{  route('posts.store') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label  for="title">Title:</label>
            <input type="text" name="title" value="">
            <label for="body">Post body</label>
            <input type="textarea" name="body" value="">
            <button class="btn btn-success">Create Post</button>
          </form>
        </div>
      </div>
    @endsection
