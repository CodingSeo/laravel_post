<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function create(){
        return view('users.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|max:255',
            'email'=>'required|email|max:255|unique:users',
            'password'=>'required|confirmed|min:6',
        ]);
        $user = \App\USER::create([
            'name' ->$request->input('name'),
            'email' ->$request->input('email'),
            'password'->$requets->input('password')
        ]);

    } 
    public function confirm(){

    }
}
