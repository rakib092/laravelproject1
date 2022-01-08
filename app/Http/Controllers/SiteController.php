<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $data['post_list']=Post::get();
        return view('welcome',$data);
    }
}
