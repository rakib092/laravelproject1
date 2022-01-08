<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
         $posts=new Post();
         $posts->title="T7";
         $posts->description="D7";
         $posts->is_active=true;
         $posts->save();
         $posts->tags()->attach([2,3]);
    }

    public function Edit($id){
         $data['post']=Post::find($id);
         return view('posts.edit',$data);
    }

    public function update($id,Request $request){
         $post=Post::find($id);
         $post->title=$request->title;
         $post->description=$request->description;
         $post->save();
         return redirect('/');
    }

    public function show($id){
        $post=Post::find($id);
        if(!$post){
           return redirect('/');
        }
        $data['post']=$post;
        return view('posts.show',$data);
    }

    public function delete($id){
        $data=Post::find($id);
        $data->delete();
        return redirect()->back();
    }
}
