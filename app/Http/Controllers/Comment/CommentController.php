<?php
namespace App\Http\Controllers\Comment;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function allComments()
    { 
        $comments = Comment::all();
     // dd($comments);
       return $comments;
    }
        public function post() 
    {
        $comments = Comment::all();
        $post = $comments->post;
       return $post;
    }
}
