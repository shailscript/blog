@extends('main')
  @section('title', '| Create New Post ')
    @section('content')
      <div class="row">
        <div class="col">
          <h1>Create Blog Post</h1>
          <hr>
          <form class="form" action="{{  route('posts.store') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title" placeholder="Example: An Awesome blog coming up">
            </div>
            <div class="form-group">
              <label for="slug">Slug:</label>
              <input type="text" class="form-control" name="slug" placeholder="Example: awesome-blog">
            </div>
            <div class="form-group">
              <label for="body">Post body</label>
              <textarea class="form-control" rows="8" name="body" value="" placeholder="Some awesome text..."></textarea>
            </div>
            <br>
            <button class="btn btn-success btn-lg btn-block">Create Post</button>
            <br>
          </form>
        </div>
      </div>
    @endsection
