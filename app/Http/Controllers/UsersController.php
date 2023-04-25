<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index (){
        $users = User::get();
       
        return view('users.index',compact('users'));
    }
    public function show ($id){
        
        if(!$user = User::find($id)){
            return redirect() -> route('users.index');
        };
        return view('users.show',compact('user'));
    }
}
