<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        // $posts=new Post();
        // $posts->title="title one";
        // $posts->description="description one";
        // $posts->is_active=false;
        // $posts->save();
        // echo "data create success";

        Post::create([
            'title'=>"title One",
            'description'=>"description two",
            'is_active'=>false
        ]);
    }

    public function update($id){
        // $post=Post::find($id);
        // if($post){
        //   $post->title='title three';
        //   $post->description='description three';
        //   $post->is_active=true;
        //   $post->save();
        // }else{
        //     echo 'Id doesnot found';
        // }  
        $data=[
            'title'=>'title one'
        ];
        $post = Post::find($id);
         if($post){
           $post->update($data);
         }else{
             echo 'not found';
         }
         
    }

    public function delete($id){
        $post=Post::find($id);
        if($post){
            $post->delete();
            echo "Delete Success";
        }else{
            echo "NOt found";
        } 
    }

    public function display(){
        $posts= Post::get();
        return $posts;
    }
}
