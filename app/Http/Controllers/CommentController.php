<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create($post_id,Request $request){
        $post=Post::find($post_id);
        if($post){
            $comments=new Comment();
            // $comments->post_id=$post_id;
            $comments->post()->associate($post);
            $comments->comment_body=$request->comment_body;
            $comments->is_active=true;
            $comments->save();

        }else{
            echo 'post invalid';
        }
         return redirect()->back();
    }
}
