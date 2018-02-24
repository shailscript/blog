@extends('main')
@section('title','| View Post')
@section('content')
  <div class="row">
    <div class="col-md-8">
      <h1>{{ $showPost->title }}</h1>
      <p class="lead">{{ $showPost->body }}</p>
    </div>
  <div class="col-md-4">
    <div class="well">
      <dl class="dl-horizontal">
        <dt>Created at : </dt>
        <dd>{{ date('M j,Y h:i A', strtotime($showPost->created_at) ) }}</dd>
        <dt>Updated at : </dt>
        <dd>{{ date('M j,Y h:i A', strtotime($showPost->updated_at) )}}</dd>
      </dl>
      <div class="row">
        <div class="col-sm-6">
          <a href="{{ route('posts.edit', ['post' => $showPost->id]) }}" class="btn btn-primary btn-block">Edit</a>
        </div>
        <div class="col-sm-6">
          <a href="{{ route('posts.destroy', ['post' => $showPost->id]) }}" class="btn btn-danger btn-block">Delete</a>
        </div>
      </div>
    </div>
  </div>

@endsection
