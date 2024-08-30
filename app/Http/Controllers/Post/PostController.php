<?php

namespace App\Http\Controllers\Post;
use App\Http\Controllers\Controller;
use App\Models\Post;
//use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show()
    {
        $posts = Post::all();
        return $posts;
    }
    public function showpost($id)
    {
      $onepost = Post::find($id);
      return $onepost;
    }
    public function postcomments($id) 
    {
        $post = Post::find($id);
        $comments = $post->comments;
        return $comments;
    } 
}
