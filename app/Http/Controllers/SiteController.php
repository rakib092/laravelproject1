<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Vedio;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        // $data['post_list']=Post::get();
        // // return view('welcome',$data);

        $post=new Post();
        $post->title="title 1";
        $post->description="description 1";
        $post->is_active=true;
        $post->save();

        // $post2=new Post();
        // $post2->title="title 2";
        // $post2->description="description 2";
        // $post2->is_active=true;
        // $post2->save();

        // $vedio=new Vedio();
        // $vedio->url="https://laravel.com/docs/8.x/eloquent-relationships#one-to-one-polymorphic-relations";
        // $vedio->details='text details';
        // $vedio->save();
        //   $post=Post::find(1);
        //   $comment=new Comment();
        //   $comment->comment_body='text commemt';
        //   $comment->is_active=true;
        //   $post->comments()->save($comment);

        // $vedio=Vedio::find(1);
        // $comment=new Comment();
        // $comment->comment_body='vedio commemt';
        // $comment->is_active=true;
        // $vedio->comments()->save($comment);
    }
}
