<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //extract all posts from the db in a variable here
        //pass it on to the corresponding View
        $allPosts = Post::all();
        return view('posts.index')->with( 'allPosts' ,$allPosts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validate the request
        $this->validate($request, array(
          'title' => 'required|max:255',
          'body' => 'required'
      ));
      // store it in the db
      $postInstance = new Post; //instance of the model post (post.php)
      $postInstance->title = $request->title;
      $postInstance->body = $request->body;
      $postInstance->save();

      Session::flash('success', 'The blog post was successfully saved!');
      // redirect to another page
      return redirect()->route('posts.show', $postInstance->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $showPost = Post::find($id);
      return view('posts.show')->with('showPost' , $showPost );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //fetch a post through id and store it in a variable
        //pass it on to the corresponding view
        $post = Post::find($id);
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     * Save and edit
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate
        $this->validate($request, array(
          'title' => 'required|max:255',
          'body' => 'required'
       ));
        //save
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        //set flash
        Session::flash('success', 'This post was updated successfully!');
        //redirect to show
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
