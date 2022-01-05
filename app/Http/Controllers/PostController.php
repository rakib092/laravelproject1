<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

     public function stores(){
          $posts=new Post();
          $posts->title="Title new post";
          $posts->description="Description new post";
          $posts->is_active=true;
          $posts->save();
          $posts->tags()->attach([2,3]);
     }
     public function create(){
          $data['posts']=Post::get();
          return view('posts.create',$data);
     }

     public function store(){
          $posts=new Post();
          $posts->title="Title 3";
          $posts->description="Description 3";
          $posts->is_active=true;
          $posts->save();
     }

     public function show($id){
         $data=Post::find($id);
         if(!$data){
             return redirect('post/create');
         }
         $data['post']=$data;
         return view('posts.show',$data);
     }
}
