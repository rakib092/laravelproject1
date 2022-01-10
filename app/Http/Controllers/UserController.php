<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(){
         return view('users.create');
    }

    public function store(Request $request){
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect()->back();
    }

    public function edit($id){
        $data['user']=User::find($id);
        return  view('users.edit',$data);
    }

    public function update($id,Request $request){
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();
        return redirect('/');
    }

    public function delete($id){
         $user=User::find($id);
         $user->delete();
         return redirect()->back();
    }
}
