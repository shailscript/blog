@extends('main')
  @section('title','| All Posts')
  @section('content')
    <div class="row">
      <div class="col-9">
        <h1>All Posts</h1>
      </div>
      <div class="col-3">
        <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-dark">Create new post</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <th>#</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created At</th>
            <th>Action</th>
          </thead>
          <tbody>
            @foreach ($allPosts as $post)
              <tr>
                <th>{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ substr($post->body, 0, 50) }} {{ strlen($post->body)>50 ? "..." : ""}}</td>
                <td>{{ date('M j Y, h:i A', strtotime( $post->created_at ) ) }}</td>
                <td><a href=" {{ route('posts.show', ['id' => $post->id ]) }} " class = "btn btn-info btn-block">View</a>
                    <a href=" {{ route('posts.edit', ['id' => $post->id ]) }} " class = "btn btn-warning btn-block">Edit</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="row">
          {{ $allPosts->links()}}
      </div>
    </div>
  @endsection
