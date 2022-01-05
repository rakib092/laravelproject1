<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function create(){
        $data['tags']=Tag::get();
        return view('tags.create',$data);
    }
    public function store($post_id,Request $request){
        $post=Post::find($post_id);
        if($post){
            $tags=new Tag();
            $tags->tag_name=$request->tag_name;
            $tags->is_active=true;
            $tags->save();
            $tags->posts()->attach([1,2]);
        }else{
            echo 'not found';
        }
        
        return redirect()->back();
    }
    public function show($tag_id){
         $tag['tag']=Tag::find($tag_id);
         return view('tags.show',$tag);
    }
}
