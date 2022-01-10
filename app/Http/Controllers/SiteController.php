<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;

class SiteController extends Controller
{
    public function index(){
        $data['users']=User::get();
        return view('welcome',$data);
    }
}
