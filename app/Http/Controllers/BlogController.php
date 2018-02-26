<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function getIndex(){
      $posts = Post::paginate(5);
      return view('blog.index')->withPosts($posts);
    }
    public function getSingle($slug){
      //fetch post by slug from DB
      $post = Post::where( 'slug' , '=' , $slug )->first();
      //return the item to view
      return view('blog.single')->withPost($post);
    }
}
