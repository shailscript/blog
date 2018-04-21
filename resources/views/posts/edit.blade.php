@extends('main')
  @section('title', '| Edit Post')
  @section('content')
    <div class="row">
      <div class="col">
        <h1>Edit post</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-8">
        <form action="{{ route('posts.update', ['id' => $post->id]) }}" class="form" method="post">
           {{ method_field('PUT') }}
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" value="{{ $post->title }}">
          </div>
          <div class="form-group">
            <label for="slug">Slug:</label>
            <input type="text" class="form-control" name="slug" value="{{ $post->slug }}">
          </div>
          <div class="form-group">
            <label for="body">Post body</label>
            <textarea class="form-control" rows="8" name="body" value="">{{ $post->body }}</textarea>
          </div>
        </div>
        <div class="col-4">
          <div class="well">
            <dl class="dl-horizontal">
              <dt>Url :</dt>
              <dd><a href="{{ route('blog.single', ['slug'=> $post->slug]) }}">{{ route('blog.single', ['slug'=> $post->slug]) }}</a></dd>
              <dt>Created At :</dt>
              <dd>{{ date('M j, Y h:i A', strtotime($post->created_at)) }}</dd>
              <dt>Updated At :</dt>
              <dd>{{ date('M j, Y h:i A', strtotime($post->updated_at)) }}</dd>
            </dl>
            <div class="row">
              <div class="col">
                <a href="{{ route('posts.show', $post->id)}}" class="btn btn-block btn-danger">Cancel</a>
              </div>
              <div class="col">
                <button type="submit" class="btn btn-success btn-block">Save changes</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  @endsection
