<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        // $post=new Post();
        // $post->title="T1";
        // $post->description="D1";
        // $post->save();
        // $post1=new Post();
        // $post1->title="T2";
        // $post1->description="D2";
        // $post1->save();

        // $video=new Video();
        // $video->url='https://www.facebook.com/?ref=tn_tnmn';
        // $video->details='text details';
        // $video->save();

        // $post=Post::find(1);
        // $comment=new Comment();
        // $comment->comment_body='text comment post';
        // $comment->is_active=true;
        // $post->comments()->save($comment);

        $video=Video::find(1);
        $comment=new Comment();
        $comment->comment_body='text comment video';
        $comment->is_active=true;
        $video->comments()->save($comment);

    }
}
