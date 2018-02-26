<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function getSingle($slug){
      //fetch post by slug from DB
      $post = Post::where( 'slug' , '=' , $slug )->first();
      //return the item to view
      return view('blog.single')->withPost($post);
    }
}
