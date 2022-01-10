<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function store(Request $request){
        $tags=new Tag();
        $tags->tag_name=$request->tag_name;
        $tags->save();
        $tags->posts()->attach([1,2]);
        return redirect()->back();
    }
}
