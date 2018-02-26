@extends('main')
  @section('title', '| Edit Post')
  @section('content')
    <div class="row">
      <div class="col-sm-12">
        <h1>Edit post</h1>
      </div>
      <form action="{{ route('posts.update', ['id' => $post->id]) }}" class="form" method="post">
        <div class="col-md-8">
           {{ method_field('PUT') }}
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <label  for="title">Title:</label>
          <input class="from-control input-lg" type="text" name="title" value="{{ $post->title }}">
          <label  for="title">Slug:</label>
          <input class="from-control" type="text" name="slug" value="{{ $post->slug }}">
          <label for="body">Post body</label>
          <input class="form-control" type="textarea" name="body" value=" {{ $post->body }}">
        </div>
        <div class="col-md-4">
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
              <div class="col-sm-6">
                <a href="{{ route('posts.show', $post->id)}}" class="btn btn-block btn-danger">Cancel</a>
              </div>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-success btn-block">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  @endsection
