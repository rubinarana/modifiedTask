<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
     public function index()
     {  
        $user = auth()->user();
        return view('welcome')->with('user',$user);
     }

    public function show($username)
    {
        // dd($username);
    	$user= \App\User::with('following','followers','posts')->where('username',$username)->first();

    	if(!$user) {
    		return response('User not found', 404);
    	}
    	$followers= $user->followers;
    	$following= $user->following;

    	return view('profile')->with(['user' => $user, 'posts' => $user->posts]);
    }
}
