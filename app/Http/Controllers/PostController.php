<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
	public function index()
	{
		return view('upload');
	}
    public function store(Request $request)
    {
    	if($request->hasfile('image')) {
    		$request->file('image');
    		return  $request->image->storeAs('public','post.png');
    		// return Storage::putFile('public',$request->file('image'));
    	}
    	else
    	{
    		return 'please select first';
    	}
        return redirect('/profile');
    	// $path = $request->file('image')->store('upload');
    	// echo $path;
    }

    // public function show()
    // {
    // 	$url= Storage::url('post.png');
    // 	// return Storage::allFiles('public');
    // 	return "<img src='".$url."'/>";
    // }
}
