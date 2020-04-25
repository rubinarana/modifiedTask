<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show($username)
    {
    	$user= \App\User::with('following','followers')->where('username',$username)->first();

    	if(!$user) {
    		return response('User not found', 404);
    	}

    	$followers= $user->followers;
    	$following= $user->following;
    	
    	return view('profile')->with(['user'=>$user]);
    }
}
