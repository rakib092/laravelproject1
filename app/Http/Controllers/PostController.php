<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create($id){
        $data['user']=User::find($id);
        return view('posts.create',$data);
    }

    public function index(){
         $data['posts']=Post::get();
         return view('posts.show',$data);
    }

    public function edit($id){
          $data['post']=Post::find($id);
          return view('posts.edit',$data);
    }

    public function store($id,Request $request){
        $data=User::find($id);
        $posts=new Post();
        $posts->user()->associate($data);
        $posts->title=$request->title;
        $posts->description=$request->description;
        $posts->save();
        $posts->tags()->attach([1,2]);
    }

    public function update($id,Request $request){
        $post=Post::find($id);
        $post->title=$request->title;
        $post->description=$request->description;
        $post->save();
        return redirect('/post/show');
    }

    public function delete($id){
         $data=Post::find($id);
         $data->delete();
         return redirect()->back();
    }

    public function dispaly($id){
          $post=Post::find($id);
          if(!$post){
              return redirect('/');
          }
          $data['post']=$post;
          return view('posts.display',$data);
    }
}
